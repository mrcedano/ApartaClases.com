<?php

namespace Tests\Routes;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_about_us_page_returns_a_sucessful_response(): void
    {
        $response = $this->get($this->app_url . '/about-us');

        $response->assertStatus(200);
    }

    public function test_home_page_returns_a_sucessful_response(): void {
        $response = $this->get($this->app_url);

        $response->assertStatus(200);
    }

    public function test_student_list_returns_a_list_with_oscar(): void {
        $response = $this->get($this->app_url . '/students/list');

        $response->assertStatus(200);
    }
}

