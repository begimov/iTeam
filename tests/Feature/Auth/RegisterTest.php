<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    public function test_user_can_view_a_register_form()
    {
        $response = $this->get('/register');

        $response->assertSuccessful();

        $response->assertViewIs('auth.register');
    }

    public function test_authenticated_user_can_not_view_a_register_form()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('/register');

        $response->assertRedirect('/user');
    }

    public function test_user_can_register_using_valid_data()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/register', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticated();
    }

    public function test_user_can_not_register_using_present_data()
    {
        $user = factory(User::class)->create();

        $response = $this->post('/register', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertTrue(session()->hasOldInput('email'));

        $this->assertFalse(session()->hasOldInput('password'));

        $this->assertGuest();
    }

    public function test_user_can_not_register_without_valid_email()
    {
        $response = $this->post('/register', [
            'email' => 'email',
            'password' => 'password'
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertTrue(session()->hasOldInput('email'));

        $this->assertFalse(session()->hasOldInput('password'));

        $this->assertGuest();
    }

    public function test_user_can_not_register_without_email()
    {
        $response = $this->post('/register', [
            'email' => '',
            'password' => 'password'
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertGuest();
    }

    public function test_user_can_not_register_without_password()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/register', [
            'email' => $user->email,
            'password' => ''
        ]);

        $response->assertSessionHasErrors('password');

        $this->assertTrue(session()->hasOldInput('email'));

        $this->assertFalse(session()->hasOldInput('password'));

        $this->assertGuest();
    }

    public function test_user_can_not_register_with_password_less_than_6_chars_long()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/register', [
            'email' => $user->email,
            'password' => '12345'
        ]);

        $response->assertSessionHasErrors('password');

        $this->assertTrue(session()->hasOldInput('email'));

        $this->assertFalse(session()->hasOldInput('password'));

        $this->assertGuest();
    }
}
