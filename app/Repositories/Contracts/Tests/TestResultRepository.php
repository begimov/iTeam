<?php

namespace App\Repositories\Contracts\Tests;

interface TestResultRepository
{
    public function store($testId, $request);
}