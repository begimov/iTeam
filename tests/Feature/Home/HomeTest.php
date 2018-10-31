<?php

namespace Tests\Feature\Home;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    public function tests_home_page_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function tests_home_page_view()
    {
        $response = $this->get('/');

        $response->assertViewIs('home.index');
    }

    public function tests_home_page_has_mks_data()
    {
        $response = $this->get('/');

        $response->assertViewHas('mks');
    }

    public function tests_home_page_has_mps_data()
    {
        $response = $this->get('/');

        $response->assertViewHas('mps');
    }

    public function tests_home_page_has_posts_data()
    {
        $response = $this->get('/');

        $response->assertViewHas('posts');
    }
}
