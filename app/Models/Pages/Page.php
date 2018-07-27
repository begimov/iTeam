<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Filters\Pages\PageFilters;

class Page extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('status', 1);
        });

        static::addGlobalScope('latestfirst', function (Builder $builder) {
            $builder->latest();
        });
    }

    public function elements()
    {
        return $this->hasMany(Element::class)->orderBy('sort_order', 'asc');
    }

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