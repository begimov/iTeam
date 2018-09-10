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
        $test = $this->tests
            ->withCriteria([
                new With(['testType'])
            ])
            ->findById($id);
        
        dd($test);
    }
}
