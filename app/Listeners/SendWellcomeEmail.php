<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserRegistationEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class SendWellcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistationEvent $event): void
    {
        Mail::to($event->user->email)->send( new WelcomeEmail($event->user->name));
    }
}
