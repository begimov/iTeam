<?php

namespace App\Transformers\Products;

use App\Models\Products\Product;

class ProductTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['material'];

    public function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
        ];
    }

    public function includeMaterial(Product $product)
    {
        return $this->collection($product->materials, new MaterialTransformer);
    }
}