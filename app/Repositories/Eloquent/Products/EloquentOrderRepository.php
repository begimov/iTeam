<?php

namespace App\Repositories\Eloquent\Products;

use App\Repositories\EloquentRepositoryAbstract;
use App\Repositories\Contracts\Products\OrderRepository;

use App\Models\Products\Order;
use App\Models\Products\Product;

class EloquentOrderRepository extends EloquentRepositoryAbstract implements OrderRepository
{
    public function entity()
    {
        return Order::class;
    }

    public function getAuthUserOrders()
    {
        $this->entity = auth()->user()->orders();
        return $this;
    }

    public function store($data)
    {
        $product = Product::with(['priceTags'])->find($data['product_id']);

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : NULL,
            'product_id' => $data['product_id'],
            'price' => isset($data['price_tag_id']) 
                ? $orderPrice = $product->priceTags->find($data['price_tag_id'])->price
                : $orderPrice = $product->price,
            'quantity' => $data['quantity'] ?? 1,
            'payment_state_id' => ($orderPrice == 0) 
                ? config('orders.payed_payment_state_id') 
                : config('orders.unpaid_payment_state_id')
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();
    }
}
