<?php

namespace App\Services\App\Tests\Results;

class CertificationTestResult extends TestResultAbstract
{
    public function processTestResults($test, $testResult)
    {
        $rightAnswers = $this->processTestData($test);

        dd($rightAnswers, $testResult->data, $this->calculateTestScore($testResult->data, $rightAnswers));
    }

    protected function processTestData($test)
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

    protected function calculateTestScore($testResult, $rightAnswers)
    {
        return array_reduce(array_keys($testResult), function($score, $questionId) use ($testResult, $rightAnswers) {

            if (is_array($testResult[$questionId])) {
                return $score;
            } else {
                return $score + $rightAnswers[$questionId][$testResult[$questionId]];
            }

        }, 0);
    }
}
