<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function services()
    {
        return view('company.services');
    }

    public function contact()
    {
        return view('company.contact');
    }

    public function terms()
    {
        return view('company.terms');
    }

    public function offer()
    {
        return view('company.offer');
    }
}
