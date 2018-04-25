<?php

namespace App\Http\Controllers\Webapi\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MagnetController extends Controller
{
    public function subscribe(Request $request)
    {
        return response()->json($request->all());
    }
}
