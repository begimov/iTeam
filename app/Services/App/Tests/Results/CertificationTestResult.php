<?php

namespace App\Services\App\Tests\Results;

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        $rightAnswers = $test->testQuestions()
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


        dd($rightAnswers, $testResult->data);
    }
}
