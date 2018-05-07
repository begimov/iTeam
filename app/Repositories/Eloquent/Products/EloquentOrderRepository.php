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

        $order = Order::updateOrCreate(
            [
                'user_id' => auth()->user()->id,
                'product_id' => $data['product_id']
            ],
            [
                'price' => isset($data['price_tag_id']) 
                    ? $product->priceTags->where('id', $data['price_tag_id'])->first()->price
                    : $product->price
            ]
        );
    }
}
