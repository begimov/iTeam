<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Filters\Pages\PageFilters;
use App\Models\Products\Product;

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

    public function productPrice()
    {
        $priceElements = array_filter($this->elements->toArray(), function($element) {
            return array_key_exists('product', $element['data']) 
                || array_key_exists('products', $element['data']);
        });

        if (empty($priceElements)) {
            return 'БЕСПЛАТНО';
        }

        $productIds = array_map(function($element) {
            return array_key_exists('product', $element['data']) 
                ? $element['data']['product']['productId'] 
                : $element['data']['products'][0]['productId'];
        }, $priceElements);

        $productId = array_shift($productIds);
        
        return round(Product::find($productId)->price) . '~';
    }

    public function isMasterProjectPage()
    {
        return $this->category_id == config('pages.mp_category_id');
    }

    public function isMasterClassPage()
    {
        return $this->category_id == config('pages.mk_category_id');
    }

    public function hasPurchaseBlocks()
    {
        return count($this->getDataElementsByName('product')) > 0;
    }

    public function hasMpPurchaseBlocks()
    {
        return count($this->getDataElementsByName('products')) > 0;
    }

    protected function getDataElementsByName($name)
    {
        return array_filter($this->elements->toArray(), function($element) use ($name) {
            return array_key_exists($name, $element['data']);
        });
    }
}