<?php

namespace App\Transformers\Tests;

use App\Models\Tests\Test;

class TestTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['testType', 'testQuestions'];

    public function transform(Test $test)
    {
        return [
            'id' => $test->id,
            'name' => $test->name,
            'description' => $test->description,
        ];
    }

    public function includeTestType(Test $test)
    {
        return $this->item($test->testType, new TestTypeTransformer);
    }

    public function includeTestQuestions(Test $test)
    {
        return $this->collection($test->testQuestions, new TestQuestionTransformer);
    }
}