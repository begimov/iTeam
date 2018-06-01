<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Payments\Contracts\IWalletOne;

class WalletOnePaymentController extends Controller
{
    protected $walletOne;

    public function __construct(IWalletOne $walletOne)
    {
        $this->walletOne = $walletOne;
    }

    /**
     * Get payment signature.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPaymentSignature(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'data' => [
                'WMI_SIGNATURE' => $this->walletOne->generatePaymentSignature($request->all())
            ]
        ]);
    }
}
