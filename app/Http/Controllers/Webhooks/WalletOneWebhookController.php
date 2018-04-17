<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Payments\Contracts\IWalletOne;

class WalletOneWebhookController extends Controller
{
    protected $walletOne;

    public function __construct(IWalletOne $walletOne)
    {
        $this->walletOne = $walletOne;
    }

    public function handleWebhook(Request $request)
    {
        $payload = $request->all();

        $this->printResponse($this->walletOne->handlePayment($payload));
    }

    protected function printResponse($string)
    {
        print $string;
        exit();
    }
}
