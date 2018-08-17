<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pages\{
    Category,
    Theme
};

class ThemeController extends Controller
{
    public function index(Category $category, Theme $theme)
    {
        dd($category, $theme);
    }
}
