<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\Page;
use App\Models\Pages\Category;

class PageController extends Controller
{
    public function index(Category $category)
    {
        dd($category);
    }

    public function show(Page $page)
    {
        $page->load('elements', 'elements.block', 'elements.files');
        return view('pages.page.container', compact('page'));
    }
}