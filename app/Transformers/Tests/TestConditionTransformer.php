<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestCondition;

class TestConditionTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestCondition $testCondition)
    {
        return [
            'id' => $testCondition->id,
            'name' => $testCondition->name,
            'description' => $testCondition->description,
            'score' => $testCondition->score
        ];
    }
}