<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Employer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    use RefreshDatabase;
    
    public function test_job_belongs_to_employer(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_has_a_tag(): void
    {
        $job = Job::factory()->create();
        
        $job->tag('Frontend');

        //$this->assertTrue($job->tags->toHaveCount(1));
        $this->assertCount(1, $job->tags);
    }

}








//act interact & assert



