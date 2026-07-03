<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about');
Route::view('home','home');
Route::view('login','login');
Route::view('admin','admin');
Route::view('home2','home2');
Route::view('login2','login2');

Route::get('list',[StudentController::class, 'list']);
Route::get('save',[StudentController::class, 'save']);