<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\Pages\Page;
use App\Models\Pages\Category;

use App\Repositories\Eloquent\Criteria\With;
use App\Repositories\Eloquent\Criteria\Where;

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
        $relations = ['pages'];

        $category = $this->categories->withCriteria([
            new With($relations),
            new Where('slug', $slug),
        ])->first();

        if (!isset($category)) {
            return abort(404);
        }

        return view('pages.category.index', compact('category'));
    }

    public function show(Page $page)
    {
        $page->load('elements', 'elements.block', 'elements.files');

        if (!Auth::check()) {
            session([
                config('session.keys.page_path') => request()->path()
            ]);
        }

        return view('pages.page.container', compact('page'));
    }
}