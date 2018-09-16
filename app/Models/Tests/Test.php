<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function testType()
    {
        return $this->belongsTo(TestType::class);
    }

    public function testQuestions()
    {
        return $this->hasMany(TestQuestion::class);
    }

    public function testConditions()
    {
        return $this->hasMany(TestCondition::class);
    }

    public function getMaxScore()
    {
        return $this->testQuestions->reduce(function($score, $question) {
            return $score + $question->testAnswers->sum('points');
        }, 0);
    }
}