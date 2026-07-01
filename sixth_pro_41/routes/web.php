<?php

use App\Http\Controllers\ImageController;
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
Route::get('search-student',[StudentController::class, 'searchStudent']);
Route::post('delete-multiple-students',[StudentController::class, 'deleteMultipleStudents']);
Route::view('upload-image','upload-image');
Route::post('upload-image', [ImageController::class,'uploadImage']);
Route::get('display-image', [ImageController::class, 'imageList']);