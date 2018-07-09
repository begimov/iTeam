<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'products_materials');
    }

    public function priceTags()
    {
        return $this->hasMany(PriceTag::class);
    }

    public function isFree()
    {
        return $this->price == 0;
    }
}