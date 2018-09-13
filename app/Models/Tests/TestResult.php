<?php

namespace App\Models\Tests;

use App\User;
use App\Models\Tests\Test;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
