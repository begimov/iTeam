<?php

namespace App\Http\Controllers\Webapi\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Pages\SubscribeOnMagnet;
use App\Services\Marketing\Contracts\IGetResponse;

class MagnetController extends Controller
{
    public function __construct(IGetResponse $gr)
    {
        $this->gr = $gr;
    }
    
    public function subscribe(SubscribeOnMagnet $request)
    {
        $this->gr->addContact($request->all());
    }
}
