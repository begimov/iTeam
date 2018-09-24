<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $reviews = $this->reviews->paginate(20);

        return view('company.review.index', compact('reviews'));
    }
}
