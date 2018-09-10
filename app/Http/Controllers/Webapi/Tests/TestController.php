<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\Tests\TestTransformer;
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
        // $relations = ['testType', 'testQuestions', 'testQuestions.testAnswers'];
        $relations = ['testType', 'testQuestions'];

        $test = $this->tests
            ->withCriteria([
                new With($relations)
            ])
            ->findById($id);
        
        return fractal()
            ->item($test)
            ->parseIncludes($relations)
            ->transformWith(new TestTransformer)
            ->toArray();
    }
}
