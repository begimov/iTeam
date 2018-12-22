<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Pages\PageRepository;

class SearchController extends Controller
{
    protected $pages;

    public function __construct(PageRepository $pages)
    {
        $this->pages = $pages;
    }

    public function index(Request $request)
    {
        $pages = \App\Models\Pages\Page::orWhere('name', 'like', "%{$request->q}%")
            ->orWhere('description', 'like', "%{$request->q}%")
            ->paginate(10);

        return view('search.index', compact('pages'));
    }
}
