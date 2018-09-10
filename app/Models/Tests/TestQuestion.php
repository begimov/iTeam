<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    public function testAnswers()
    {
        return $this->hasMany(TestAnswer::class);
    }
}