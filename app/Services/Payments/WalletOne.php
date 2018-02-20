<?php

namespace App\Services\Payments;

use App\Services\Payments\Contracts\IWalletOne;

class WalletOne implements IWalletOne
{
    public function generatePaymentSignature(array $formFields)
    {
        uksort($formFields, "strcasecmp");
        $fieldValues = array_reduce($formFields, function ($result, $fieldValue) {
                return $result . iconv("UTF-8", "Windows-1251", $fieldValue);
        }, "");
        return base64_encode(pack("H*", md5($fieldValues . config('payments.walletone_key'))));
    }
}
