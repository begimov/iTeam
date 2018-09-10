<?php

namespace App\Transformers\Tests;

use App\Models\Tests\Test;

class TestTransformer extends \League\Fractal\TransformerAbstract
{
    // protected $availableIncludes = ['product', 'materials'];

    public function transform(Test $test)
    {
        return [
            'id' => $test->id,
            'name' => $test->name,
            'description' => $test->description,
        ];
    }

    // public function includeProduct(Order $order)
    // {
    //     return $this->item($order->product, new ProductTransformer);
    // }
}