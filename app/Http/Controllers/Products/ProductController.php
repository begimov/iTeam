<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Products\Product;
use App\Models\Content\File;
use App\Http\Traits\Downloads;

class ProductController extends Controller
{
    use Downloads;
    
    public function show(Product $product)
    {
        $product->load('materials', 'materials.files', 'materials.resources');
        
        return view('products.product.show', compact('product'));
    }

    public function download(Product $product, $materialId, File $file)
    {
        dd($product, $materialId, $file);
    }
}
