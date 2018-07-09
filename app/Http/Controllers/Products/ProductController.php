<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        dd($product);
    }
}
