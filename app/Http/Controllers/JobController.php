<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        $featuredJobs = $jobs->get(1, collect());
        $regularJobs = $jobs->get(0, collect());

        return view('jobs.index', [
            'featuredJobs' => $featuredJobs,
            'jobs' => $regularJobs,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request)
    {
        $attributes = $request->validated();

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        Mail::to('5star@wp.pl')->send(
            new \App\Mail\JobPosted($job)
        );

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // authorize
        $this->authorize('viewAny', Job::class);

        //fetch jobs that are the current logged in user jobs
        $userId = Auth::id();
        $employer = Employer::where('user_id', $userId)->first();

        $jobs = Job::latest()->with('employer')->where('employer_id', $employer->id)->simplePaginate(5);

        return view('jobs.show', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job, JobRequest $request)
    {
        $attributes = $request->validated();
        // Authorize Update
        $this->authorize('update', $job);

        $job->update(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {

            $tags = explode(',', $attributes['tags']);
            $job->retag($tags);
        }

        // redirect to /jobs/show
        return redirect('/jobs/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $this->authorize('delete', $job);
        $job->delete();
        return redirect('/jobs/show');
    }
}
