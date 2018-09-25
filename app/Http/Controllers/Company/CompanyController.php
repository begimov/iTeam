<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Contracts\Reviews\ReviewRepository;

class CompanyController extends Controller
{
    protected $reviews;

    public function __construct(ReviewRepository $reviews)
    {
        $this->reviews = $reviews;
    }

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
