<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    public function tests_mks_category_status()
    {
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mk'));

        $response->assertStatus(200);
    }

    public function tests_mps_category_status()
    {
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mp'));

        $response->assertStatus(200);
    }

    public function tests_category_view()
    {
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mp'));

        $response->assertViewIs('pages.category.index');
    }

    public function tests_category_view_has_category_data()
    {
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mp'));

        $response->assertViewHas('category');
    }

    public function tests_category_view_has_themes_data()
    {
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mp'));

        $response->assertViewHas('themes');
    }
}
