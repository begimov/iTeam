<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\Page;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $page = $page->with([
                'elements',
                'elements.block',
            ])
            ->first();
        return view('pages.page.container', compact('page'));
    }
}