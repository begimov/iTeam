<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestQuestion;

class TestQuestionTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestQuestion $testQuestion)
    {
        return [
            'id' => $testQuestion->id,
            'question' => $testQuestion->question,
            'sort_order' => $testQuestion->sort_order,
        ];
    }
}