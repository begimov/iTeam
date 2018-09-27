<?php

namespace App\Services\App\Tests\Results;

use App\Transformers\Tests\{
    TestConditionTransformer,
    TestResultTransformer,
    TestCertificateTransformer
};

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        return [

            'score' => $testScore = $this->calculateTestScore($test, $testResult),

            'maxScore' => $test->getMaxScore(),

            'condition' => $this->getTransformedCondition($test, $testScore),

            'testResult' => $this->transfromTestResult($testResult),

            'testCertificate' => $this->transformTestCertificate($testCertificate = $test->testCertificate),

            'isCertified' => $testCertificate->isCertified($testScore)
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

                        return $score + (($a = $test->testQuestions
                            ->find($questionId)
                            ->testAnswers
                            ->find($userAnswerId)) ? $a->points : 0);
                    }, 0);
        }, 0);
    }

    protected function getTransformedCondition($test, $testScore)
    {
        return fractal(
            $test->getCondition($testScore), 
            new TestConditionTransformer
        )->toArray();
    }

    protected function transfromTestResult($testResult)
    {
        return fractal(
            $testResult, 
            new TestResultTransformer
        )->toArray();
    }

    protected function transformTestCertificate($testCertificate)
    {
        return fractal(
            $testCertificate,
            new TestCertificateTransformer
        )->toArray();
    }
}
