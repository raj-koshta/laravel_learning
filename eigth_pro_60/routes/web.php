<?php

use App\Http\Controllers\FluentStringController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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
Route::post('send-email', [MailController::class,'sendEmail']);
Route::view('send-email','send-email');

// ------------ Fluent String ----------------
Route::get('fluent-string', [FluentStringController::class,'string']);

// ------------------ Route Model Binding ------------
Route::get('device/{key:name}', [DeviceController::class, 'index']);