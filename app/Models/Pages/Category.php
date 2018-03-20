<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents view of an Element of a Page
 */
class Category extends Model
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