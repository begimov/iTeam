<?php

namespace Tests\Feature\Payments;

use App\User;
use Tests\TestCase;
use App\Models\Products\Order;
use App\Models\Products\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvoiceTest extends TestCase
{
    public function test_unauth_user_cant_access_invoice_create_endpoint()
    {
        $response = $this->get('webapi/orders/payments/invoices/create');

        $response->assertRedirect('/register');
    }

    public function test_auth_user_can_access_invoice_create_endpoint()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)
            ->get('webapi/orders/payments/invoices/create');

        $response->assertSuccessful();

        $response->assertJsonFragment([
            'data'
        ]);
    }

    public function test_unauth_user_cant_access_invoice_store_endpoint()
    {
        $order = factory(Order::class)->make();

        $order->product()->associate(factory(Product::class)->create())->save();
        
        $response = $this->post('webapi/orders/' . $order->id . '/payments/invoices');

        $response->assertRedirect('/register');
    }

    public function test_auth_user_cant_store_invoice_without_valid_payload()
    {
        $order = factory(Order::class)->make();

        $order->product()->associate(factory(Product::class)->create())->save();

        $user = factory(User::class)->create();
        
        $response = $this->actingAs($user)
            ->post('webapi/orders/' . $order->id . '/payments/invoices');

        $response->assertSessionHasErrors('company.name');
        $response->assertSessionHasErrors('company.business_entity_id');
        $response->assertSessionHasErrors('user.name');
        $response->assertSessionHasErrors('userProfile.phone');
    }

    public function test_auth_user_can_store_invoice()
    {
        $order = factory(Order::class)->make();

        $order->product()->associate(factory(Product::class)->create())->save();

        $user = factory(User::class)->create();
        
        $response = $this->actingAs($user)
            ->post('webapi/orders/' . $order->id . '/payments/invoices', [
                'company' => [
                    'name' => 'Company',
                    'business_entity_id' => 1
                ],
                'user' => [
                    'name' => 'Name'
                ],
                'userProfile' => [
                    'phone' => '1111111',
                ]
            ]);
        
        $response->assertJsonStructure(['url']);
    }

    public function test_auth_user_can_download_invoice()
    {
        $order = factory(Order::class)->make();

        $order->product()->associate(factory(Product::class)->create())->save();

        $user = factory(User::class)->create();
        
        $response = $this->actingAs($user)
            ->post('webapi/orders/' . $order->id . '/payments/invoices', [
                'company' => [
                    'name' => 'Company',
                    'business_entity_id' => 1
                ],
                'user' => [
                    'name' => 'Name'
                ],
                'userProfile' => [
                    'phone' => '1111111',
                ]
            ]);

        $response = $this->actingAs($user)
            ->get($response->original['url']);

        $response->assertHeader('Content-Type', 'application/pdf');
    }
}
