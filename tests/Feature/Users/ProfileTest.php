<?php

namespace Tests\Feature\Users;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    public function test_unauth_user_cant_access_profile()
    {
        $response = $this->get(route('user.profile.settings'));

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_access_profile()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get(route('user.profile.settings'));

        $response->assertSuccessful();
    }

    public function test_auth_user_can_update_basic_profile_data()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post(route('user.profile.settings.store'), [
            'name' => $name = $user->name . '1',
            'email' => $email = $user->email . '1',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
        ]);
    }

    public function test_auth_user_cant_update_basic_profile_data_with_invalid_credentials()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post(route('user.profile.settings.store'), [
            'name' => '',
            'email' => 'a',
        ]);

        $response->assertSessionHasErrors('email');

        $response->assertSessionHasErrors('name');

        $this->assertTrue(session()->hasOldInput('email'));
    }

    public function test_auth_user_cant_update_basic_profile_data_with_duplicating_email()
    {
        $user = factory(User::class)->create();

        $anotherUser = factory(User::class)->create();

        $response = $this->actingAs($user)->post(route('user.profile.settings.store'), [
            'name' => $user->name,
            'email' => $anotherUser->email,
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertTrue(session()->hasOldInput('name'));

        $this->assertTrue(session()->hasOldInput('email'));
    }
}
