<?php

namespace App\Http\Controllers\Webapi\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Pages\SubscribeOnMagnet;

class MagnetController extends Controller
{
    public function subscribe(SubscribeOnMagnet $request)
    {
        return response()->json($request->all());
    }
}
