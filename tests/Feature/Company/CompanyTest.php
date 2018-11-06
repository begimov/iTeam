<?php

namespace Tests\Feature\Company;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    public function tests_company_services_page_status()
    {
        $response = $this->get(route('company.services'));

        $response->assertStatus(200);
    }

    public function tests_company_services_page_view()
    {
        $response = $this->get(route('company.services'));

        $response->assertViewIs('company.services');
    }

    public function tests_company_services_page_view_has_reviews_data()
    {
        $response = $this->get(route('company.services'));

        $response->assertViewHas('reviews');
    }

    public function tests_company_contact_page_status()
    {
        $response = $this->get(route('company.contact'));

        $response->assertStatus(200);
    }

    public function tests_company_contact_page_view()
    {
        $response = $this->get(route('company.contact'));

        $response->assertViewIs('company.contact');
    }

    public function tests_company_terms_page_status()
    {
        $response = $this->get(route('company.terms'));

        $response->assertStatus(200);
    }

    public function tests_company_terms_page_view()
    {
        $response = $this->get(route('company.terms'));

        $response->assertViewIs('company.terms');
    }

    public function tests_company_offer_page_status()
    {
        $response = $this->get(route('company.offer'));

        $response->assertStatus(200);
    }

    public function tests_company_offer_page_view()
    {
        $response = $this->get(route('company.offer'));

        $response->assertViewIs('company.offer');
    }

    public function tests_company_projects_page_status()
    {
        $response = $this->get(route('company.projects.index'));

        $response->assertStatus(200);
    }

    public function tests_company_projects_page_view()
    {
        $response = $this->get(route('company.projects.index'));

        $response->assertViewIs('company.project.index');
    }
}
