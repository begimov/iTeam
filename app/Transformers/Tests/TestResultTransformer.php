<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestResult;

class TestResultTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestResult $testResult)
    {
        return [
            'id' => $testResult->id,
            'test_id' => $testResult->test_id
        ];
    }
}