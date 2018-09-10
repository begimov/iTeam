<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Contracts\Tests\TestRepository;

class TestController extends Controller
{
    protected $tests;

    public function __construct(TestRepository $tests)
    {
        $this->tests = $tests;
    }

    public function show($id)
    {
        $relations = ['testType', 'testQuestions', 'testQuestions.testAnswers'];

        $test = $this->tests
            ->withCriteria([
                new With($relations)
            ])
            ->findById($id);
        
        dd($test);
    }
}
