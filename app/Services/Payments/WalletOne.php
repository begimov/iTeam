<?php

namespace App\Services\Payments;

use App\Services\Payments\Contracts\IWalletOne;

class WalletOne implements IWalletOne
{
    protected $key;

    public function __construct()
    {
        $this->key = config('services.walletone.key');
    }

    public function handlePayment(array $payload)
    {
        if(!$this->parametersExist($payload)) {
            $this->printResponse("RETRY", "Required parameter is missing");
        }

        $method = 'handle'.$payload['WMI_ORDER_STATE'];

        if (method_exists($this, $method)) {
            return $this->{$method}($payload);
        } else {
            return $this->printResponse('RETRY', 'Method does not exist');
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
        //
    }

    protected function parametersExist($payload)
    {
        return isset(
            $payload['WMI_SIGNATURE'], 
            $payload['WMI_PAYMENT_NO'], 
            $payload['WMI_ORDER_STATE']
        );
    }

    protected function isSignatureCorrect($payload)
    {
        $params = array_filter($payload, function ($key) {
            return $key !== "WMI_SIGNATURE";
        }, ARRAY_FILTER_USE_KEY);

        uksort($params, "strcasecmp");

        $values = array_reduce($params, function ($result, $elem) {
            return $result . $elem;
        }, "");

        $signature = base64_encode(pack("H*", md5($values . config('services.walletone.key'))));

        return $signature == $payload['WMI_SIGNATURE'];
    }

    protected function printResponse($status, $desc = '')
    {
        print "WMI_RESULT=" . strtoupper($status) . "&";
        print "WMI_DESCRIPTION=" .urlencode($desc);
        exit();
    }
}
