<?php

namespace Tests\Feature\Users;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    public function test_user_cant_access_dashboard_without_authentication()
    {
        $response = $this->get('/user');

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_access_dashboard()
    {
        $user = factory(User::class)->make();
        
        $response = $this->actingAs($user)->get('/user');

        $response->assertSuccessful();
    }

    public function test_dashboard_view()
    {
        $user = factory(User::class)->make();
        
        $response = $this->actingAs($user)->get('/user');

        $response->assertViewIs('users.dashboard');
    }
}
