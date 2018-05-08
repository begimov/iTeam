<?php

namespace App\Policies\Products;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Repositories\Eloquent\Criteria\WhereIn;
use App\Repositories\Eloquent\Criteria\Where;

use App\Repositories\Contracts\Products\OrderRepository;

class OrderPolicy
{
    use HandlesAuthorization;

    protected $orders;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function delete(User $user, $order)
    {
        return auth()->id() === $order->user_id;
    }
}
