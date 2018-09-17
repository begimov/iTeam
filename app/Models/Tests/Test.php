<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\Tests\TestConditionTransformer;

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

    public function testCertificates()
    {
        return $this->hasMany(TestCertificate::class);
    }

    public function getMaxScore()
    {
        return $this->testQuestions->reduce(function($score, $question) {

            return $score + $question->testAnswers->sum('points');

        }, 0);
    }

    public function getCondition($testScore)
    {
        $conditions = $this->testConditions->sortBy('score');

        foreach ($conditions as $condition) {

            if ($condition->score >= $testScore) return $condition;
        }
    }
}