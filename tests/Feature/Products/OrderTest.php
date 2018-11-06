<?php

namespace Tests\Feature\Products;

use App\User;
use Tests\TestCase;
use App\Models\Products\Order;
use App\Models\Products\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    public function test_unauth_user_cant_access_orders_index_endpoint()
    {
        $response = $this->get('/webapi/orders');

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_access_orders_index_endpoint()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('/webapi/orders');

        $response->assertSuccessful();

        $response->assertJsonStructure(['data']);
    }

    public function test_auth_user_can_get_orders()
    {
        $user = factory(User::class)->create();

        $user->orders()->save($order = factory(Order::class)->create([
            'product_id' => $productId = factory(Product::class)->create()->id
        ]));

        $response = $this->actingAs($user)
            ->get('/webapi/orders');

        $response->assertSuccessful();

        $response->assertJsonFragment([
            'id' => $order->id,
            'id' => $productId
        ]);
    }

    public function test_auth_user_cant_store_order_without_valid_payload()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->post('/webapi/orders');

        $response->assertSessionHasErrors([
            'product_id'
        ]);
    }

    public function test_auth_user_can_store_order()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->post('/webapi/orders', [
                'product_id' => $id = factory(Product::class)->create()->id
            ]);

        $this->assertDatabaseHas('orders', [
            'product_id' => $id
        ]);
    }

    public function test_auth_user_can_get_order()
    {
        $user = factory(User::class)->create();

        $user->orders()->save($order = factory(Order::class)->create([
            'product_id' => $productId = factory(Product::class)->create()->id
        ]));

        $response = $this->actingAs($user)
            ->get('/webapi/orders/' . $order->id);

        $response->assertJsonFragment([
            'id' => $order->id,
            'id' => $productId
        ]);
    }

    public function test_auth_user_can_destroy_order()
    {
        $user = factory(User::class)->create();

        $user->orders()->save($order = factory(Order::class)->create([
            'product_id' => $productId = factory(Product::class)->create()->id
        ]));

        $response = $this->actingAs($user)
            ->delete('/webapi/orders/' . $order->id);

        $this->assertSoftDeleted('orders', [
            'id' => $order->id,
            'product_id' => $productId
        ]);
    }
}
