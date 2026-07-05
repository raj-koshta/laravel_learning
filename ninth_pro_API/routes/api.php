<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('test', function(){
    return['name'=> "Raj Koshta",'do' => "Learning API in laravel"];
});

Route::get('list',[StudentController::class, 'list']);
Route::post('add-student',[StudentController::class, 'addStudent']);