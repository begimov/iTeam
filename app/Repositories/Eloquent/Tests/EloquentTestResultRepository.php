<?php

namespace App\Repositories\Eloquent\Tests;

use App\Models\Tests\TestResult;
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
        dd($request->user(), $testId, $request->all());
    }
}