<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webapi\Products\OrderStoreRequest;
use App\Repositories\Contracts\Products\OrderRepository;

class FastOrderController extends Controller
{
    protected $orders;

    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function show($id, $code)
    {
        dd($id, $code);
    }
}
