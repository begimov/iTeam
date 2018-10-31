<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tests\Test;

class Product extends Model
{
    use SoftDeletes;

    public $timestamps = false;

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

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'products_tests');
    }

    public function isFree()
    {
        return $this->price == 0;
    }
}