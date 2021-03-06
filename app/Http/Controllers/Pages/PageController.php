<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\Pages\Page;
use App\Models\Pages\Category;

use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Eloquent\Criteria\Where;
use App\Repositories\Eloquent\Criteria\WithoutGlobalScopes;

use App\Repositories\Contracts\Pages\{
    CategoryRepository,
    ThemeRepository,
    PageRepository
};

class PageController extends Controller
{
    protected $categories;

    protected $themes;

    protected $pages;

    public function __construct(
        CategoryRepository $categories, ThemeRepository $themes, PageRepository $pages)
    {
        $this->categories = $categories;

        $this->themes = $themes;

        $this->pages = $pages;
    }

    public function index($slug)
    {
        $relations = ['pages', 'pages.elements'];

        $category = $this->categories->withCriteria([
            new With($relations),
            new Where('slug', $slug),
        ])->first();

        $themes = $this->themes->get();

        if (!isset($category)) {
            return abort(404);
        }

        return view('pages.category.index', compact('category', 'themes'));
    }

    public function show($slug)
    {
        $relations = ['elements', 'elements.block', 'elements.files'];

        $page = $this->pages->withCriteria([
            new Where('slug', $slug),
            new With($relations),
            new WithoutGlobalScopes()
        ])->first();

        if (!$page) return abort(404);

        if (!Auth::check()) {
            session([
                config('session.keys.page_path') => request()->path()
            ]);
        }

        return view('pages.page.container', compact('page'));
    }
}