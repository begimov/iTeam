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
        // TODO: use hasManyThrough insetad of file->material->products
        $products = $file->material->products->map(function ($product) {
            return $product->id;
        });

        $orders = auth()->user()->orders()->whereIn('product_id', $products)->get();
        
        dd($products, $products, $orders);
        // TODO: check if user has paid order of product 
        // to which material passed file belongs to 
        return false;
    }
}
