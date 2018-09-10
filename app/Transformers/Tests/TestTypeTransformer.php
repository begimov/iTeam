<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestType;

class TestTypeTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestType $testType)
    {
        return [
            'id' => $testType->id,
            'name' => $testType->name,
        ];
    }
}