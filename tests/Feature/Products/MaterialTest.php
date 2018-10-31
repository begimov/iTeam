<?php

namespace Tests\Feature\Products;

use Tests\TestCase;
use App\Models\Products\Material;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MaterialTest extends TestCase
{
    public function test_material_page_can_be_accessed_using_token()
    {
        $material = factory(Material::class)->create();

        $response = $this->get(
            '/materials/' 
            . $material->id
            . '/' . $material->token . '/'
        );

        $response->assertViewIs('products.material.show');
    }

    public function test_material_view_has_material_data()
    {
        $material = factory(Material::class)->create();

        $response = $this->get(
            '/materials/' 
            . $material->id
            . '/' . $material->token . '/'
        );

        $response->assertViewHas('material');
    }

    public function test_material_view_has_accessCode_data()
    {
        $material = factory(Material::class)->create();

        $response = $this->get(
            '/materials/' 
            . $material->id
            . '/' . $material->token . '/'
        );

        $response->assertViewHas('accessCode');
    }

    public function test_material_redirect_if_access_code_is_wrong()
    {
        $material = factory(Material::class)->create();

        $response = $this->get(
            '/materials/' 
            . $material->id
            . '/' . $material->token . '1/'
        );

        $response->assertStatus(302);
    }
}
