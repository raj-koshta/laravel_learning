<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add-student','add-student');
Route::post('add-student',[StudentController::class,'addStudent']);