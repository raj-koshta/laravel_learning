<?php

use App\Http\Controllers\NamedRoutes;
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

// Route::view('home/profile/user', 'named-routes');
Route::view('home/profile/user', 'named-routes')->name('nr');
Route::view('home/profile/{name}', 'named-routes')->name('user');
Route::get('show', [NamedRoutes::class, 'show']);
Route::get('user', [NamedRoutes::class, 'user']);