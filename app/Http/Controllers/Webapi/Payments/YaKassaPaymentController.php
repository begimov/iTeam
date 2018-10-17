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
        dd($this->createPayment($request, $client));
    }

    protected function createPayment(Request $request, Client $client)
    {
        $order = $this->orders->findById($request->id);
        
        return  $client->createPayment(
            $this->createPayload($order),
            uniqid('', true)
        );
    }

    public function createPayload($order)
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
