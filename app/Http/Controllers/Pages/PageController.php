<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\Page;
use App\Models\Pages\Category;

use App\Repositories\Eloquent\Criteria\With;

use App\Repositories\Contracts\Pages\CategoryRepository;

class PageController extends Controller
{
    protected $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    public function index($slug)
    {
        // $pages = $category->pages;
        $relations = ['pages'];

        $category = $this->categories->withCriteria([
            new With($relations)
        ])->findById($slug);

        dd($category);

        // return view('pages.category.index', compact('pages'));
    }

    public function show(Page $page)
    {
        $page->load('elements', 'elements.block', 'elements.files');
        return view('pages.page.container', compact('page'));
    }
}