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
        if ($request->q) {

            $q = preg_replace('/\\\\/', '.', trim(json_encode($request->q), '"'));

            $pages = \App\Models\Pages\Page::whereHas('elements', 
                function ($query) use ($q) {
                    $query->where('data', 'regexp', $q);
                })
                ->orWhere('name', 'like', "%{$request->q}%")
                ->orWhere('description', 'like', "%{$request->q}%")
                ->paginate(10);

        } else {
            $pages = \App\Models\Pages\Page::paginate(10);
        }
        return view('search.index', compact('pages'));
    }
}
