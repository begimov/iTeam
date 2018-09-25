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
        $relations = ['files'];

        $reviews = $this->reviews
            ->withCriteria([
                new With($relations)
            ])
            ->latest()
            ->limit(5)
            ->get();

        return view('company.services', compact('reviews'));
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
