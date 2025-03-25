<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [JobController::class, 'index']);

Route::middleware('guest')->group(function() {
    Route::get ('/register', [RegisteredUserController::class, 'create']); //this group ->middleware('guest') for each route
    Route::post ('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout',[SessionController::class, 'destroy'])->middleware('auth');