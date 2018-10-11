<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Material;

class MaterialController extends Controller
{
    public function show(Request $request, Material $material, $accessCode)
    {
        dd($material, $accessCode);
    }
}
