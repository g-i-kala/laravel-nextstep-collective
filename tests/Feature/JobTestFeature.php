<?php

namespace Tests\Feature;

use App\Models\Job;
use Tests\TestCase;
use App\Models\Employer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTestFeature extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;

    public function test_example(): void
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // Assert
        $this->assertTrue($job->employer->is($employer));
    }
}
