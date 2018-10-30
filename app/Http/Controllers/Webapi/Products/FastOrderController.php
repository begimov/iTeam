<?php

namespace App\Http\Controllers\Webapi\Products;

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
    
    public function store(OrderStoreRequest $request)
    {
        $order = $this->orders->store($request->all());
        
        return redirect()->route('fastorders.show', [
            'order' => $order->id,
            'code' => base64_encode($order->created_at),
        ]);
    }
}
