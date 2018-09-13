<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestResultController extends Controller
{
    public function store(Request $request, $testId)
    {
        dd($testId, $request->all());
    }
}
