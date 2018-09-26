<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestCertificateController extends Controller
{
    public function show($testId, $testResutltId, $certificateId)
    {
        dd($testId, $testResutltId, $certificateId);
    }
}
