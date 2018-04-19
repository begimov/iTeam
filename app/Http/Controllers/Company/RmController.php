<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RmController extends Controller
{
    public function index()
    {
        return view('company.rm.index');
    }

    public function model()
    {
        return view('company.rm.model');
    }

    public function origins()
    {
        return view('company.rm.origins');
    }

    public function project()
    {
        return view('company.rm.project');
    }
}
