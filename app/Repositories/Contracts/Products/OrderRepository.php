<?php

namespace App\Repositories\Contracts\Products;

use App\Models\Products\Order;

interface OrderRepository
{
    public function getAuthUserOrders();
    public function destroy(Order $order);
}
