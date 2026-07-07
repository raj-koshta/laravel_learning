<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;

        dispatch(function () use ($to, $msg, $subject) {
            Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        })->delay(now()->addSeconds(5));

        return response()->json([
            'message' => 'Email has been queued successfully.'
        ]);
    }
}
