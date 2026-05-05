<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// 1st way to define route
// Route::get('/user', function () {
//     return view('name');
// });

// 2nd way to define route
// Route::view('/user_name','name');

// Pass data via route
// Route::get('/user/{name}', function ($name) { return view('name',['name' => $name]);});

// Caling controller using route
Route::get('/user', [UserController::class, 'user']);

// Passign dynamic value to controller using route
Route::get('/user/{name}', [UserController::class, 'user']);

// Calling nested view folder and Passign dynamic value to controller using route
Route::get('/user/{name}/{age}', [UserController::class, 'user_data']);