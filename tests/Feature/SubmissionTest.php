<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test submission is queued and processed.
     *
     * @return void
     */
    public function test_submission_is_queued_and_processed()
    {
        $name = fake()->name;
        $email = fake()->safeEmail;

        $response = $this->postJson('/api/submission', [
            'name' => $name, 'email' => $email, 'message' => fake()->sentence,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('submissions', compact('name', 'email'));
    }
}
