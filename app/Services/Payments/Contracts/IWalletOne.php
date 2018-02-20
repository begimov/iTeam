<?php

namespace App\Services\Payments\Contracts;

interface IWalletOne
{
    public function generatePaymentSignature(array $formFields);
}