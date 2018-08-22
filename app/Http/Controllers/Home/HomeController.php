<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Eloquent\Criteria\Where;
use App\Repositories\Contracts\Pages\PageRepository;

class HomeController extends Controller
{

    protected $pages;

    protected $guzzle;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageRepository $pages, Client $guzzle)
    {
        $this->pages = $pages;

        $this->guzzle = $guzzle;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->getBlogPosts();

        $mks = $this->getMasterClasses();

        $mps = $this->getMasterProjects();

        return view('home.index', compact('mks', 'posts', 'mps'));
    }

    protected function getBlogPosts()
    {
        return json_decode($this->guzzle->request(
            'GET', config('urls.blog') 
            . 'wp-json/wp/v2/posts?per_page=6'
        )->getBody());
    }

    protected function getMasterClasses()
    {
        $relations = ['elements', 'elements.files'];

        return $this->pages
            ->latest()
            ->limit(6)
            ->withCriteria([
                new With($relations),
                new Where('category_id', 1)
            ])
            ->get();
    }

    protected function getMasterProjects()
    {
        return app()->make(PageRepository::class)
            ->latest()
            ->limit(5)
            ->withCriteria([
                new Where('category_id', 2)
            ])
            ->get();
    }
}
