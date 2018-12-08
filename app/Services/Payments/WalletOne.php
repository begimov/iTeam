<?php

namespace App\Services\Payments;

use App\Jobs\Products\ProcessPaidOrder;
use App\Services\Payments\Contracts\IWalletOne;
use App\Repositories\Contracts\Products\OrderRepository;

class WalletOne implements IWalletOne
{
    protected $orders;
    protected $key;

    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
        $this->key = config('services.walletone.key');
    }

    public function handlePayment(array $payload)
    {
        if(!$this->parametersExist($payload)) {
            return $this->respond("RETRY", "Required parameter is missing");
        }

        $method = 'handle'.$payload['WMI_ORDER_STATE'];

        if (method_exists($this, $method)) {
            return $this->{$method}($payload);
        } else {
            return $this->respond('RETRY', 'Method does not exist: handle' . $payload['WMI_ORDER_STATE']);
        }
    }

    public function generatePaymentSignature(array $formFields)
    {   
        $filteredFormFields = $this->filterFormFields($formFields);

        uksort($filteredFormFields, "strcasecmp");

        $fieldValues = array_reduce($filteredFormFields, function ($result, $fieldValue) {
                return $result . iconv("UTF-8", "Windows-1251", $fieldValue);
        }, "");

        return base64_encode(pack("H*", md5($fieldValues . $this->key)));
    }

    protected function filterFormFields($formFields)
    {
        return array_filter($formFields, function ($key) {
            return $key !== "WMI_SIGNATURE";
        }, ARRAY_FILTER_USE_KEY);
    }

    protected function handleAccepted($payload)
    {
        if ($this->isSignatureCorrect($payload)) {

            $order = $this->markOrderAsPayed($payload['WMI_PAYMENT_NO']);

            if ($order) {
                ProcessPaidOrder::dispatch($order);
            }

            return $this->respond('OK');

        } else {
            return $this->respond("Retry", "Неверная подпись " . $payload['WMI_SIGNATURE']);
        }
    }

    protected function parametersExist($payload)
    {
        return isset($payload['WMI_SIGNATURE'], $payload['WMI_PAYMENT_NO'], $payload['WMI_ORDER_STATE']);
    }

    protected function isSignatureCorrect($payload)
    {
        $params = $this->filterFormFields($payload);

        uksort($params, "strcasecmp");

        $values = array_reduce($params, function ($result, $elem) {
            return $result . $elem;
        }, "");

        $signature = base64_encode(pack("H*", md5($values . $this->key)));

        return $signature == $payload['WMI_SIGNATURE'];
    }

    protected function markOrderAsPayed($id)
    {
        $order = $this->orders->findById($id);

        optional($order)->markAsPayed();

        return $order;
    }

    protected function respond($status, $description = null)
    {
        $status = "WMI_RESULT=" . strtoupper($status);
        $description = isset($description) ? "&WMI_DESCRIPTION=" . urlencode($description) : '';
        return  $status . $description;
    }
}
