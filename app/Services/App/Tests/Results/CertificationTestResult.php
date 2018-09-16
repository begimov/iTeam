<?php

namespace App\Services\App\Tests\Results;

use App\Transformers\Tests\TestConditionTransformer;

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        $testScore = $this->calculateTestScore(

            $this->prepareTestResultData($testResult->data), 

            $this->prepareTestData($test)
        );

        return $this->buildResults($test, $testScore);
    }

    protected function prepareTestResultData($testResultData)
    {
        return array_map(function($answers) {

            return is_array($answers) ? $answers : [$answers];

        }, $testResultData);
    }

    protected function prepareTestData($test)
    {
        return $test->testQuestions()
            ->with('testAnswers')
            ->get()
            ->reduce(function($result, $question) {

                $result[$question->id] = $question->testAnswers

                    ->reduce(function($result, $answer) {

                        $result[$answer->id] = $answer->points;

                        return $result;

                    }, []);

                return $result;

            }, []);
    }

    protected function calculateTestScore($testResultData, $testData)
    {
        return array_reduce(array_keys($testResultData), 

            function($score, $questionId) use ($testResultData, $testData) {
            
                return $score + array_reduce($testResultData[$questionId], 
                    
                    function($acc, $answer) use ($questionId, $testData) {

                        return $acc + $testData[$questionId][$answer];
                    }, 0);
            }, 0);
    }
    
    protected function buildResults($test, $testScore)
    {
        return [
            'score' => $testScore,
            'condition' => $this->getCondition($test, $testScore)
        ];
    }

    protected function getCondition($test, $testScore)
    {
        $conditions = $test->testConditions->sortBy('score');

        foreach ($conditions as $condition) {

            if ($condition->score >= $testScore) {

                return fractal($condition, new TestConditionTransformer)->toArray();
            }
        }
    }
}
