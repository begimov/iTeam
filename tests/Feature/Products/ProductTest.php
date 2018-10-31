<?php

namespace Tests\Feature\Products;

use Tests\TestCase;
use App\Models\Products\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    public function test_free_product_available_via_direct_link()
    {
        $product = factory(Product::class)->create();

        $response = $this->get(
            '/products/' 
            . $product->id
        );

        $response->assertViewIs('products.product.show');
    }

    public function test_free_product_view_has_product_data()
    {
        $product = factory(Product::class)->create();

        $response = $this->get(
            '/products/' 
            . $product->id
        );

        $response->assertViewHas('product');
    }

    public function test_paid_product_not_available_via_direct_link_which_redirect()
    {
        $product = factory(Product::class)->create([
            'price' => 100
        ]);

        $response = $this->get(
            '/products/' 
            . $product->id
        );

        $response->assertStatus(302);
    }
}
