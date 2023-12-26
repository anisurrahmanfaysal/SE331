<?php

// Import the necessary classes
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Define the route for the home page
Route::get('/',[HomeController::class,'index']);

// Define the route for the dashboard page, with middleware for authentication and verification
Route::get('/dashboard', function () {
    return view('backend.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group routes that require authentication
Route::middleware('auth')->group(function () {
    // Define resource routes for the EmployeeController
    Route::resource('employee',EmployeeController::class);
    // Define resource routes for the DepartmentController
    Route::resource('department',DepartmentController::class);
});

// Include the routes from the auth.php file
require __DIR__.'/auth.php';
