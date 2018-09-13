<?php

namespace App\Repositories\Eloquent\Tests;

use App\Repositories\EloquentRepositoryAbstract;
use App\Repositories\Contracts\Tests\TestResultRepository;
use App\Models\Tests\TestResult;

class EloquentTestResultRepository extends EloquentRepositoryAbstract implements TestResultRepository
{
    public function entity()
    {
        return TestResult::class;
    }
}