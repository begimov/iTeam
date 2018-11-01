<?php

namespace Tests\Feature\Users;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    public function test_unauth_user_cant_access_profile()
    {
        $response = $this->get('/user/profile/settings');

        $response->assertRedirect('/register');
    }
}
