<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletOnePaymentController extends Controller
{
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
