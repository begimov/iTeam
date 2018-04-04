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
        $products = $file->material->products;
        dd($products);
        // TODO: check if user has paid order of product 
        // to which material passed file belongs to 
        return false;
    }
}
