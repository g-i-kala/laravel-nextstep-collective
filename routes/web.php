<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SalaryController;
use App\Models\Employer;

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/show', [JobController::class, 'show'])->middleware('auth');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');
Route::post('/jobs/edit/{job}', [JobController::class, 'edit'])->middleware('auth');
Route::patch('/jobs/update/{job}', [JobController::class, 'update'])->middleware('auth');

Route::get('/carrers', [CareerController::class, 'index']);
Route::get('/salaries', [SalaryController::class, 'index']);
Route::get('/companies', [EmployerController::class, 'index']);

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']); //this group ->middleware('guest') for each route
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
