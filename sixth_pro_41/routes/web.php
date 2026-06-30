<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add-student','add-student');
Route::post('add-student',[StudentController::class,'addStudent']);
Route::get('list-student',[StudentController::class,'listStudent']);
Route::get('delete-student/{id}',[StudentController::class, 'deleteStudent']);
Route::get('edit-student/{id}',[StudentController::class, 'editStudent']);
Route::put('update-student/{id}',[StudentController::class, 'updateStudent']);