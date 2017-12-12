<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function about()
    {
        return view('company.about');
    }

    public function contact()
    {
        return view('company.contact');
    }
}
