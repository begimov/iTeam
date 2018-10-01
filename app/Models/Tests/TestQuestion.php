<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    public function testAnswers()
    {
        return $this->hasMany(TestAnswer::class);
    }

    public function getRightAnswers()
    {
        return $this->testAnswers->filter(function($answer) {
            return $answer->points > 0;
        });;
    }
}