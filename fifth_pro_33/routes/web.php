<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user', [UserController::class, 'getUser']);
// Route::post('user', [UserController::class, 'post']);
// Route::put('user', [UserController::class, 'put']);
// Route::patch('user', [UserController::class, 'patch']);
// Route::delete('user', [UserController::class, 'delete']);

// Route::view('form', [UserController::class, 'user']);

// ------------- Any Method ---------------
// Route::any('user',[UserController::class, 'any']);

// ------------- Match Method ---------------
// Route::match(['post', 'get'],'user',[UserController::class, 'group1']);
// Route::match(['put', 'delete'],'user',[UserController::class, 'group2']);

// -------------- Request class ------------------
// Route::post('user', [UserController::class, 'requestAnalysis']);

// ----------------- Session -------------------
// Route::view('login','login');
// Route::post('login',[ UserController::class,'login']);
// Route::view('profile','profile');
// Route::get('logout',[ UserController::class,'logout']);

// --------------- Flash Session --------
Route::post('add-user',[UserController::class, 'addUser']);
Route::view('add-user','add-user');