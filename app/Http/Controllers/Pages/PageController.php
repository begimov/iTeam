<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\Page;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $page->load('elements', 'elements.block');
        return view('pages.page.container', compact('page'));
    }
}