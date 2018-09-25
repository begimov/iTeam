<?php

namespace App\Models\Reviews;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content\File;

class Review extends Model
{
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
