<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail(){
        $to = "rajkoshta.rk@gmail.com";
        $msg = "Welcome to laravel learning";
        $subject = "Welcome to Laravel Learning";

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
}
