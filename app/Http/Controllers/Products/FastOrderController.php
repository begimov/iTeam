<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Models\Products\Order;
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

    public function show(Order $order, $code)
    {
        if ($order->isPaid()) {
            
            $order->load('product', 'product.materials', 'product.materials.files', 'product.materials.resources');
            
        }

        return view('products.fastorder.show', compact('order'));
    }
}
