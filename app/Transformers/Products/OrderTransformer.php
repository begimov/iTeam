<?php

namespace App\Transformers\Products;

use App\Models\Products\Order;

class OrderTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['product', 'product.materials'];

    public function transform(Order $order)
    {
        return [
            'id' => $order->id,
            'payment_state_id' => $order->payment_state_id,
            'payment_type_id' => $order->payment_type_id,
            'price' => $order->price,
            'created_at_human' => $order->created_at->format('d/m/y, H:i'),
            'updated_at_human' => $order->updated_at->format('d/m/y, H:i'),
        ];
    }

    public function includeProduct(Order $order)
    {
        return $this->item($order->product, new ProductTransformer);
    }
}