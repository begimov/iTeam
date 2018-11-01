<?php

namespace Tests\Feature\Pages;

use App\User;
use Tests\TestCase;
use App\Models\Pages\Page;
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

    public function tests_page_view()
    {
        $page = factory(Page::class)->create();
        
        $response = $this->get('/pages/' . $page->slug);

        $response->assertViewIs('pages.page.container');
    }

    public function tests_last_visited_page_path_store_in_session_for_unauth_user()
    {
        $page = factory(Page::class)->create();
        
        $response = $this->get('/pages/' . $page->slug);

        $response->assertSessionHas(config('session.keys.page_path'), request()->path());
    }

    public function tests_last_visited_page_redirect_for_auth_user()
    {
        $page = factory(Page::class)->create();
        
        $this->get($url = '/pages/' . $page->slug);

        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect($url);
    }

    public function tests_page_view_has_page_data()
    {
        $page = factory(Page::class)->create();
        
        $response = $this->get('/pages/' . $page->slug);

        $response->assertViewHas('page');
    }

    public function tests_undefined_page_returns_not_found_status()
    {
        $response = $this->get('/pages/undefined');

        $response->assertStatus(404);
    }

    public function tests_unpublished_page_not_available_on_category_page()
    {
        $page = factory(Page::class)->create([
            'status' => 0,
            'category_id' => 1
        ]);
        
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mk'));

        $response->assertDontSeeText($page->name);
    }

    public function tests_published_page_is_available_on_category_page()
    {
        $page = factory(Page::class)->create([
            'category_id' => 1
        ]);
        
        $response = $this->get('/pages/category/' . config('urls.slugs.categories.mk'));

        $response->assertSeeText($page->name);
    }

    public function tests_unpublished_page_is_available_via_direct_link()
    {
        $page = factory(Page::class)->create([
            'status' => 0,
            'category_id' => 1
        ]);
        
        $response = $this->get('/pages/' . $page->slug);

        $response->assertSuccessful();
    }
}
