<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestQuestion;

class TestQuestionTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['testAnswers'];

    public function transform(TestQuestion $testQuestion)
    {
        return [
            'id' => $testQuestion->id,
            'question' => $testQuestion->question,
            'sort_order' => $testQuestion->sort_order,
            'multiple_choice' => $this->isMultipleСhoice($testQuestion)
        ];
    }

    public function includeTestAnswers(TestQuestion $testQuestion)
    {
        return $this->collection($testQuestion->testAnswers, new TestAnswerTransformer);
    }

    protected function isMultipleСhoice($question)
    {
        $rightAnswersCount = $question->testAnswers
            ->map(function ($answer) {
                return $answer->points;
            })->filter(function ($value) {
                return $value > 0;
            })->count();

        return $rightAnswersCount > 1;
    }
}