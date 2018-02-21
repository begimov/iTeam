<?php

namespace App\Services\Payments;

use App\Services\Payments\Contracts\IWalletOne;

class WalletOne implements IWalletOne
{
    public function generatePaymentSignature(array $formFields)
    {   
        $filteredFormFields = $this->filterFormFields($formFields);

        uksort($filteredFormFields, "strcasecmp");

        $fieldValues = array_reduce($filteredFormFields, function ($result, $fieldValue) {
                return $result . iconv("UTF-8", "Windows-1251", $fieldValue);
        }, "");

        return base64_encode(pack("H*", md5($fieldValues . config('services.walletone.key'))));
    }

    protected function filterFormFields($formFields)
    {
        return array_filter($formFields, function ($key) {
            return $key !== "WMI_SIGNATURE";
        }, ARRAY_FILTER_USE_KEY);
    }
}
