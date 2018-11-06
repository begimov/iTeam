<?php

namespace Tests\Feature\Company;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RmTest extends TestCase
{
    public function tests_company_rm_index_page_status()
    {
        $response = $this->get(route('company.rm.index'));

        $response->assertStatus(200);
    }

    public function tests_company_rm_index_page_view()
    {
        $response = $this->get(route('company.rm.index'));

        $response->assertViewIs('company.rm.index');
    }

    public function tests_company_rm_model_page_status()
    {
        $response = $this->get(route('company.rm.model'));

        $response->assertStatus(200);
    }

    public function tests_company_rm_model_page_view()
    {
        $response = $this->get(route('company.rm.model'));

        $response->assertViewIs('company.rm.model');
    }

    public function tests_company_rm_origins_page_status()
    {
        $response = $this->get(route('company.rm.origins'));

        $response->assertStatus(200);
    }

    public function tests_company_rm_origins_page_view()
    {
        $response = $this->get(route('company.rm.origins'));

        $response->assertViewIs('company.rm.origins');
    }

    public function tests_company_rm_project_page_status()
    {
        $response = $this->get(route('company.rm.project'));

        $response->assertStatus(200);
    }

    public function tests_company_rm_project_page_view()
    {
        $response = $this->get(route('company.rm.project'));

        $response->assertViewIs('company.rm.project');
    }
}
