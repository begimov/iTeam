<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThemeTest extends TestCase
{
    public function tests_theme_page_status()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertStatus(200);
    }

    public function tests_theme_page_view()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertViewIs('pages.category.theme.index');
    }

    public function tests_category_view_has_pages_data()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertViewHas('pages');
    }

    public function tests_category_view_has_themes_data()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertViewHas('themes');
    }

    public function tests_category_view_has_category_data()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertViewHas('category');
    }

    public function tests_category_view_has_theme_data()
    {
        $response = $this->get(
            '/pages/category/' 
            . config('urls.slugs.categories.mk')
            . '/themes/strategiya'
        );

        $response->assertViewHas('theme');
    }
}
