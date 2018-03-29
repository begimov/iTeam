<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Products\OrderRepository;

class DashboardController extends Controller
{
    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function index(Request $request)
    {
        if (isset($request->product_id)) {
            // TODO: add validation, exists validation rule on products table, price_tag_id exists and belongs to this product
            $this->orders->store($request->all());
        }
        return view('users.dashboard');
    }
}
