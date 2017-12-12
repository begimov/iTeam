<?php

namespace App\Transformers\Products;

use App\Models\Products\Product;

class ProductTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['materials', 'files'];

    public function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
        ];
    }

    public function includeMaterials(Product $product)
    {
        return $this->collection($product->materials, new MaterialTransformer);
    }
}