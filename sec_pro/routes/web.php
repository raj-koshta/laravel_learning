<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberForm;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('home/{name}', 'home');

Route::view('user-form', 'user-form');
Route::post('add-user', [UserController::class, 'addUser']);

Route::view('member-form', 'member-form');
Route::post('add-member', [MemberForm::class, 'addMember']);