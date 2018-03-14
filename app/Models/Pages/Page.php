<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

use App\Filters\Pages\PageFilters;

class Page extends Model
{
    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}