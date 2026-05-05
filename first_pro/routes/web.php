<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 1st way to define route
Route::get('/user', function () {
    return view('name');
});

// 2nd way to define route
// Route::view('/user_name','name');

// Pass data via route
Route::get('/user/{name}', function ($name) { return view('name',['name' => $name]);});