<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('student/home', 'home');
// Route::get('student/show', [HomeController::class, 'show']);
// Route::get('student/add', [HomeController::class, 'add']);

Route::prefix('student')->group(function () {
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});


// Route::view('student/india/home', 'home');
// Route::get('student/india/show', [HomeController::class, 'show']);
// Route::get('student/india/add', [HomeController::class, 'add']);

Route::prefix('student/india')->group(function () {
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

Route::get('show',[StudentController::class, 'show']);
Route::get('add',[StudentController::class, 'add']);
Route::get('del',[StudentController::class, 'del']);

Route::controller(StudentController::class)->group(function(){
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('del', 'del');
});

// Route::get('about/{name}', [StudentController::class, 'about']);

Route::controller(StudentController::class)->group(function(){
    Route::get('about/{name}','about');
});

// +++++++++++++++++ Global ModdleWare ++++++++++++++++++++
Route::view('/home', 'home');
Route::view('/about', 'about');


// +++++++++++++++++ Group ModdleWare ++++++++++++++++++++
// Route::view('/home', 'home')->middleware('check1');

// ++++++++++++++ Apply on multiple routes +++++
// Route::middleware('check1')->group(function (){
//     Route::view('/about', 'about');
//     Route::view('/list', 'about');
//     Route::view('/contact', 'about');
//     Route::view('/home', 'home');
// });

// ++++++++++++++++++ Assigning middleware in route directly +++++
Route::view('/home', 'home')->middleware([AgeCheck::class, CountryCheck::class]);
Route::view('/about', 'about')->middleware(CountryCheck::class);