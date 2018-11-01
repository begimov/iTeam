<?php

namespace Tests\Feature\Tests;

use App\User;
use Tests\TestCase;
use App\Models\Tests\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestTest extends TestCase
{
    public function test_authenticated_user_can_access_test()
    {
        $test = factory(Test::class)->create();

        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get(route('tests.show', [
                'test' => $test->id
            ]
        ));

        $response->assertSuccessful();
    }

    public function test_test_page_view()
    {
        $test = factory(Test::class)->create();

        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get(route('tests.show', [
                'test' => $test->id
            ]
        ));

        $response->assertViewIs('tests.test');
    }

    public function test_test_page_view_has_test_data()
    {
        $test = factory(Test::class)->create();

        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get(route('tests.show', [
                'test' => $test->id
            ]
        ));

        $response->assertViewHas('test');
    }

    public function test_unauthenticated_user_can_not_access_test()
    {
        $test = factory(Test::class)->create();

        $response = $this->get(route('tests.show', [
                'test' => $test->id
            ]
        ));

        $response->assertRedirect('/register');
    }

    public function test_user_can_not_access_nonexisting_test()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get(route('tests.show', [
                'test' => 4353534534534535
            ]
        ));

        $response->assertStatus(404);
    }
}
