<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Criteria\With;
use App\Services\Payments\Contracts\IWalletOne;
use App\Repositories\Contracts\Products\OrderRepository;

class WalletOnePaymentController extends Controller
{
    protected $walletOne;

    protected $orders;

    public function __construct(IWalletOne $walletOne, OrderRepository $orders)
    {
        $this->walletOne = $walletOne;

        $this->orders = $orders;
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

    public function redirect(Request $request)
    {
        $order = $this->orders
            ->withCriteria([
                new With(['product'])
            ])
            ->findById($request->order);

        $data = [
            "WMI_MERCHANT_ID" => config('services.walletone.merchant_id'),
            "WMI_PAYMENT_AMOUNT" => $order->price,
            "WMI_CURRENCY_ID" => config('services.walletone.currency_id'),
            "WMI_PAYMENT_NO" => $order->id,
            "WMI_DESCRIPTION" => "iTeam: {$order->product->name}",
            "WMI_AUTO_LOCATION" => config('services.walletone.auto_location'),
            "WMI_SUCCESS_URL" => config('urls.panel'),
            "WMI_FAIL_URL" => config('urls.panel'),
            "WMI_SIGNATURE" => ""
        ];

        $paymentData = array_merge($data, [
            'WMI_SIGNATURE' => $this->walletOne->generatePaymentSignature($data)
        ]);

        return view('payments.walletone.redirect', compact('paymentData'));
    }
}
