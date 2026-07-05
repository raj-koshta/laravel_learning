<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ------ One-to-One --
Route::get('list', [SellerController::class, 'list']);
// ------ One-to-Many --
Route::get('many-rel', [SellerController::class, 'manyRel']);
// ------ Many-to-One --
Route::get('many-to-one', [SellerController::class, 'manyToOne']);

// ------------ Email Sending ----------------
Route::get('send-email', [MailController::class,'sendEmail']);