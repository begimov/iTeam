<?php

namespace App\Repositories\Eloquent\Tests;

use App\Models\Tests\{
    Test,
    TestResult
};
use App\Repositories\EloquentRepositoryAbstract;
use App\Repositories\Contracts\Tests\TestResultRepository;

class EloquentTestResultRepository extends EloquentRepositoryAbstract implements TestResultRepository
{
    public function entity()
    {
        return TestResult::class;
    }

    public function store($testId, $request)
    {
        $testResult = new TestResult();

        $testResult->data = $request->all();

        $testResult->user()->associate($request->user());

        $testResult->test()->associate(Test::find($testId));

        $testResult->save();

        return $testResult;
    }
}