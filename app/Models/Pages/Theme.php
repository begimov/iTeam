<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
