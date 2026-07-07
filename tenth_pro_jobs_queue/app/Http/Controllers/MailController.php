<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Jobs\SendWelcomeEmailJob;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;

        // dispatch(new SendWelcomeEmailJob($to, $msg, $subject))->delay(now()->addSeconds(5));
        
        // OR
        SendWelcomeEmailJob::dispatch($to, $msg, $subject)->delay(now()->addSecond(5));

        return response()->json([
            'message' => 'Email has been queued successfully.'
        ]);
    }
}
