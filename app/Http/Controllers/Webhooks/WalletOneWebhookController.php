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

        $this->walletOne->handlePayment($payload);
    }
}
