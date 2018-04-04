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
        dd($file);
        return true;
    }
}
