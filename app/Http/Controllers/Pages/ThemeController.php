<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\{
    Category,
    Theme
};

use App\Repositories\Eloquent\Criteria\Where;

use App\Repositories\Contracts\Pages\{
    PageRepository,
    ThemeRepository
};

class ThemeController extends Controller
{
    protected $pages;

    protected $themes;

    public function __construct(PageRepository $pages, ThemeRepository $themes)
    {
        $this->pages = $pages;
        
        $this->themes = $themes;
    }

    public function index(Category $category, Theme $theme)
    {
        $pages = $this->pages->withCriteria([
            new Where('category_id', $category->id),
            new Where('theme_id', $theme->id)
        ])->get();

        $themes = $this->themes->get();

        dd($pages, $themes);
    }
}
