<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Contracts\Pages\PageRepository;

class HomeController extends Controller
{

    protected $pages;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageRepository $pages)
    {
        $this->pages = $pages;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = ['elements', 'elements.files'];

        $pages = $this->pages
            ->latest()
            ->limit(6)
            ->withCriteria([
                new With($relations)
            ])
            ->get();

        return view('home.index', compact('pages'));
    }
}
