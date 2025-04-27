<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nameFilter = $request->input('name', '');
        $locationFilter = $request->input('location', '');

        $query = Employer::query()
            ->join('jobs', 'employers.id', '=', 'jobs.employer_id')
            ->select('employers.*', 'jobs.title AS jobTitle', 'jobs.location AS jobLocation', 'jobs.url AS jobUrl')
            ->distinct();

        $query->filterByName($nameFilter);
        $query->filterByLocation($locationFilter);

        $employers = $query->get();

        return view('employers', [
            'employers' => $employers
        ]);
    }
}
