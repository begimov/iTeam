<?php

namespace App\Policies\Content;

use App\User;
use App\Models\Content\File;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function download(User $user, File $file)
    {
        $products = $file->material->products->map(function ($product) {
            return $product->id;
        });

        // TODO: Use repository
        // $orders = $this->orders
        //  ->withCriteria([
        //     new BelongsToUser($user),
        //     new WhereIn('product_id', $products),
        //     new Where('payment_state_id', config('orders.payed_payment_state_id')),
        //  ])->get();
        $orders = $user->orders()
            ->whereIn('product_id', $products)
            ->where('payment_state_id', config('orders.payed_payment_state_id'))
            ->get();
        
        return $orders->isNotEmpty();
    }
}
