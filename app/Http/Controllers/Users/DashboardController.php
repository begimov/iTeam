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
        return view('users.dashboard');
    }
}
