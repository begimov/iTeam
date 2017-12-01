<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}