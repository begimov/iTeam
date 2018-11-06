<?php

namespace Tests\Feature\Company;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewTest extends TestCase
{
    public function tests_company_reviews_page_status()
    {
        $response = $this->get(route('company.reviews.index'));

        $response->assertStatus(200);
    }

    public function tests_company_reviews_page_view()
    {
        $response = $this->get(route('company.reviews.index'));

        $response->assertViewIs('company.review.index');
    }

    public function tests_company_reviews_page_view_has_reviews_data()
    {
        $response = $this->get(route('company.reviews.index'));

        $response->assertViewHas('reviews');
    }
}
