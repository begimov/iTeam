<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Tests\TestResultRepository;

class TestResultController extends Controller
{
    protected $testresults;

    public function __construct(TestResultRepository $testresults)
    {
        $this->testresults = $testresults;
    }

    public function store(Request $request, $testId)
    {
        return $this->testresults->store($testId, $request);
    }
}
