<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $titleFilter = $request->input('title');
        $tagFilter = $request->input('tag');

        $query = Job::query();

        $query->filterByTitle($titleFilter);

        $salaries = $query
            ->selectRaw('title, MIN(url) as url, AVG(salary) as avg')
            ->groupBy('title')
            ->orderBy('avg', 'desc')
            ->get();

        if (!empty($tagFilter)) {
            $query
            ->join('job_tag', 'jobs.id', '=', 'job_tag.job_id')
            ->join('tags', 'tags.id', '=', 'job_tag.tag_id')
            ->filterByTag($tagFilter);

        }

        return view('salaries', [
            'salaries' => $salaries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
