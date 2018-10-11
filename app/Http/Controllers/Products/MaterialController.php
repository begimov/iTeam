<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    public function show(Request $request, $materialId, $accessCode)
    {
        dd($materialId, $accessCode);
    }
}
