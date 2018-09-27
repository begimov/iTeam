<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;
use App\Transformers\Tests\TestConditionTransformer;
use App\Models\Products\Product;

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

    public function testCertificate()
    {
        return $this->hasOne(TestCertificate::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_tests');
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

    public function getTheme()
    {
        return ($product = $this->products()->first()) ? $product->name : $this->name;
    }
}