<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestAnswer;

class TestAnswerTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestAnswer $testAnswer)
    {
        return [
            'id' => $testAnswer->id,
            'answer' => $testAnswer->answer,
            'sort_order' => $testAnswer->sort_order,
        ];
    }
}