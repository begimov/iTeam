<?php

namespace App\Services\App\Tests\Results;

use App\Transformers\Tests\TestConditionTransformer;

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        return $this->buildResults(
            $test, 
            $this->calculateTestScore($testResult->mapToArray(), $test->mapToArray())
        );
    }

    protected function calculateTestScore($testResult, $test)
    {
        return array_reduce(array_keys($testResult), 

            function($score, $questionId) use ($testResult, $test) {
            
                return $score + array_reduce($testResult[$questionId], 
                    
                    function($score, $answer) use ($questionId, $test) {

                        return $score + $test[$questionId][$answer];
                    }, 0);
            }, 0);
    }
    
    protected function buildResults($test, $testScore)
    {
        return [
            'score' => $testScore,
            'maxScore' => $test->getMaxScore(),
            'condition' => fractal($test->getCondition($testScore), 
                new TestConditionTransformer)->toArray()
        ];
    } 
}
