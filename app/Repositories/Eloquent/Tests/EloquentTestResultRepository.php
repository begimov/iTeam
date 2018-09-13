<?php

namespace App\Repositories\Eloquent\Tests;

use App\Models\Tests\{
    Test,
    TestResult
};

use App\Repositories\EloquentRepositoryAbstract;
use App\Repositories\Contracts\Tests\TestResultRepository;

use App\Services\App\Tests\Results\TestResultAbstract;

class EloquentTestResultRepository extends EloquentRepositoryAbstract implements TestResultRepository
{
    public function entity()
    {
        return TestResult::class;
    }

    public function store($testId, $request)
    {
        $this->deletePreviousTestResult($testId, $request->user()->id);

        $testResult = $this->storeNewTestResult($test = Test::find($testId), $request);

        return $this->buildTestResults($test, $testResult);
    }

    protected function deletePreviousTestResult($testId, $userId)
    {
        TestResult::where('test_id', $testId)
            ->where('user_id', $userId)
            ->delete();
    }

    protected function storeNewTestResult($test, $request)
    {
        $testResult = new TestResult();

        $testResult->data = $request->all();

        $testResult->user()->associate($request->user());
        $testResult->test()->associate($test);

        $testResult->save();

        return $testResult;
    }

    protected function buildTestResults($test, $testResult)
    {
        return TestResultAbstract::create($test->test_type_id)->processTestResults($testResult);
    }
}