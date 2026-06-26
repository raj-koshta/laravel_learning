<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('users', [UserController::class, 'users']);
Route::get('students', [StudentController::class, 'getStudents']);

//  Http Client - 30
Route::get('users', [UserController::class, 'getApiUsers']);

// Database Query Bilders
Route::get('users',[UserController::class, 'queries']);

// Database Query Bilders
Route::get('users-eq',[UserController::class, 'eloquentQuery']);