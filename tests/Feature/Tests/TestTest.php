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

    public function test_unauth_user_cant_get_test_data()
    {
        $test = factory(Test::class)->create();

        $response = $this->get('/webapi/tests/' . $test->id);

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_get_test_data()
    {
        $test = factory(Test::class)->create();

        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('/webapi/tests/' . $test->id);

        $response->assertJsonStructure([
            'data' => ['id', 'name', 'testType', 'testQuestions']
        ]);
    }

    public function test_unauth_user_cant_store_test_results()
    {
        $test = factory(Test::class)->create();

        $response = $this->post('/webapi/tests/' . $test->id . '/results');

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_store_test_result()
    {
        $test = factory(Test::class)->create();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post('/webapi/tests/' . $test->id . '/results');

        $response->assertJsonStructure([
            'score', 'maxScore', 'condition', 'testResult', 'testCertificate', 'isCertified'
        ]);
    }
}
