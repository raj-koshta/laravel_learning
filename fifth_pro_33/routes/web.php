<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'getUser']);
Route::view('form', [UserController::class, 'user']);
Route::post('user', [UserController::class, 'post']);
Route::put('user', [UserController::class, 'put']);
Route::patch('user', [UserController::class, 'patch']);
Route::delete('user', [UserController::class, 'delete']);