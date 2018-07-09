<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->load('materials', 'materials.files', 'materials.resources');
        
        return view('products.product.show', compact('product'));
    }
}
