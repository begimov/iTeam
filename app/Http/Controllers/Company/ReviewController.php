<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Contracts\Reviews\ReviewRepository;

class ReviewController extends Controller
{
    protected $reviews;

    public function __construct(ReviewRepository $reviews)
    {
        $this->reviews = $reviews;
    }

    public function index()
    {
        $relations = ['files'];

        $reviews = $this->reviews
            ->withCriteria([
                new With($relations)
            ])
            ->latest()
            ->paginate(20);

        return view('company.review.index', compact('reviews'));
    }
}
