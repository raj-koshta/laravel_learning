<?php

use App\Http\Controllers\MailController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ------------ Email Sending ----------------
Route::post('send-email', [MailController::class,'sendEmail']);
Route::view('send-email','send-email');

Route::get('send-without-job', function(){
    dispatch(function () {
        Mail::to('rajkoshta.rk@gmail.com')->send(new WelcomeEmail('mail without job', 'without job mail sent'));
    })->delay(now()->addSeconds(5));
});
