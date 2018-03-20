<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

/**
 * 
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

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}