<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content\File;
use App\Models\Products\Product;

class Material extends Model
{
    public $timestamps = false;
    
    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_materials');
    }

    public function resources()
    {
        return $this->morphMany('App\Models\Content\Resource', 'resourceable');
    }
}