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
        $this->deletePreviousResults($testId, $request);

        $this->buildTestResult($test = Test::find($testId), $request)->save();

        dd(TestResultAbstract::create($test->test_type_id));

        return $testResult;
    }

    protected function deletePreviousResults($testId, $request)
    {
        TestResult::where('test_id', $testId)
            ->where('user_id', $request->user()->id)
            ->delete();
    }

    protected function buildTestResult($test, $request)
    {
        $testResult = new TestResult();

        $testResult->data = $request->all();

        $testResult->user()->associate($request->user());
        $testResult->test()->associate($test);

        return $testResult;
    }
}