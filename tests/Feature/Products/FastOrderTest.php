<?php

namespace Tests\Feature\Products;

use Tests\TestCase;
use App\Models\Products\Order;
use App\Models\Products\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FastOrderTest extends TestCase
{
    public function test_fastorder_page_can_be_accessed_using_token()
    {
        $product = factory(Product::class)->create();

        $order = factory(Order::class)->create([
            'product_id' => $product->id
        ]);

        $response = $this->get(
            '/fastorders/' 
            . $order->id
            . '/' . $order->getFastOrderToken()
        );

        $response->assertViewIs('products.fastorder.show');
    }

    public function test_fastorder_page_cant_be_accessed_using_invalid_token()
    {
        $product = factory(Product::class)->create();

        $order = factory(Order::class)->create([
            'product_id' => $product->id
        ]);

        $response = $this->get(
            '/fastorders/' 
            . $order->id
            . '/' . $order->created_at
        );

        $response->assertStatus(302);
    }

    public function test_fastorder_view_has_order_data()
    {
        $product = factory(Product::class)->create();

        $order = factory(Order::class)->create([
            'product_id' => $product->id,
            'payment_state_id' => config('orders.payed_payment_state_id')
        ]);

        $response = $this->get(
            '/fastorders/' 
            . $order->id
            . '/' . $order->getFastOrderToken()
        );

        $response->assertViewHas('order');
    }

    public function test_can_generate_walletone_payment_signature()
    {
        $response = $this->post('/webapi/orders/payments/walletone/signature', [
            'WMI_MERCHANT_ID' => 1
        ]);

        $response->assertJsonStructure([
            'status',
            'data' => ['WMI_SIGNATURE']
        ]);
    }
}
