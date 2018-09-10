<?php

namespace App\Http\Controllers\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        if (!($test = $this->tests->findById($id))) {
            abort(404);
        }

        return view('tests.test', compact('test'));
    }
}
