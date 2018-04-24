<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function resourceable()
    {
        return $this->morphTo();
    }
}