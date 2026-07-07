<?php

namespace App\Jobs;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeEmailJob implements ShouldQueue
{
    use Queueable;

    public $to, $msg, $subject;

    /**
     * Create a new job instance.
     */
    public function __construct($to, $msg, $subject)
    {
        $this->to = $to;
        $this->msg = $msg;
        $this->subject = $subject;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->to)->send(new WelcomeEmail($this->msg, $this->subject));
    }
}
