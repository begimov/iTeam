<?php

namespace App\Services\Payments\Contracts;

interface IWalletOne
{
    public function handlePayment(array $payload);
    public function generatePaymentSignature(array $formFields);
}