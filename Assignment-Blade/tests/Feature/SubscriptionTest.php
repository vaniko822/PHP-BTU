<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscriptionTest extends TestCase
{
    use RefreshDatabase;

    public function testSubscriptionForm()
    {
        $response = $this->post(route('subscribe'), [
            'email' => 'test@example.com', // Replace with valid test data
        ]);

        $response->assertRedirect(); // Check for a successful redirection after form submission
    }
}
