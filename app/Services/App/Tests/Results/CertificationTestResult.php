<?php

namespace App\Services\App\Tests\Results;

use App\Transformers\Tests\{
    TestConditionTransformer,
    TestResultTransformer
};

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        $testScore = $this->calculateTestScore($test, $testResult);

        return [
            'score' => $testScore,

            'maxScore' => $test->getMaxScore(),
            
            'condition' => fractal(
                    $test->getCondition($testScore), 
                    new TestConditionTransformer
                )->toArray(),

            'testResult' => fractal(
                    $testResult, 
                    new TestResultTransformer
                )->toArray(),

            'isCertified' => $test->testCertificate->isCertified($testScore)
        ];
    }

    protected function calculateTestScore($test, $testResult)
    {
        $userAnswers = $testResult->mapDataToArray();

        return array_reduce(

            array_keys($userAnswers), function($score, $questionId) use ($userAnswers, $test) {

                return $score + array_reduce(

                    $userAnswers[$questionId],  

                    function($score, $userAnswerId) use ($test, $questionId) {

                        return $score + $test->testQuestions
                            ->find($questionId)
                            ->testAnswers
                            ->find($userAnswerId)
                            ->points;
                    }, 0);
        }, 0);
    }
}
