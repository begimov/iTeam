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

            'isCertified' => $testCertificate ? $testCertificate->isCertified($testScore) : false
        ];
    }

    protected function calculateTestScore($test, $testResult)
    {
        $userAnswers = $testResult->mapDataToArray();

        return array_reduce(

            array_keys($userAnswers), function($score, $questionId) use ($userAnswers, $test) {

                return $score + array_reduce(

                    $questionAnswers = $userAnswers[$questionId],  

                    function($score, $userAnswerId) use ($test, $questionId, $questionAnswers) {

                        $question = $test->testQuestions
                            ->find($questionId);
                        
                        if ($this->answersMatch($questionAnswers, $question->getRightAnswers())) {

                            return $score + (($a = $question->testAnswers
                                ->find($userAnswerId)) ? $a->points : 0);
                        }

                        return $score;
                        
                    }, 0);
        }, 0);
    }

    protected function answersMatch($questionAnswers, $rightAnswers)
    {
        return array_values(array_sort($questionAnswers)) == array_values(

                array_sort($rightAnswers->map(function($a) {

                    return $a->id;
                    
                })->toArray())
            );
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
