<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use YandexCheckout\Client;
use App\Repositories\Contracts\Products\OrderRepository;

class YaKassaPaymentController extends Controller
{
    protected $orders;

    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function getPaymentUrl(Request $request, Client $client)
    {
        $order = $this->orders->findById($request->id);

        $payment = $this->createPayment($order, $client);

        return [
            'url' => $payment->getConfirmation()->confirmationUrl
        ];
    }

    protected function createPayment($order, Client $client)
    {
        $response = $client->createPayment(

            $this->createPayload($order),
            
            uniqid('', true)
        );

        // update order with ya payment id ($response->getId())

        return $response;
    }

    protected function createPayload($order)
    {
        return [
            'amount' => [
                'value' => $order->price,
                'currency' => 'RUB',
            ],
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => config('urls.user_dashboard'),
            ],
            'description' => 'iTeam - Заказ №' . $order->id,
        ];
    }
}
