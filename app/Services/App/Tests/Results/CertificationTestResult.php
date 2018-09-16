<?php

namespace App\Services\App\Tests\Results;

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        $testScore = $this->calculateTestScore(

            $this->prepareTestResultData($testResult->data), 

            $this->prepareTestData($test)
        );

        dd($testScore);
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
}
