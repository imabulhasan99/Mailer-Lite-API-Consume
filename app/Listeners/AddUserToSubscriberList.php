<?php

namespace App\Listeners;

use App\Services\MailerLiteService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddUserToSubscriberList
{
    /**
     * Create the event listener.
     */
    public function __construct(public MailerLiteService $mailerLiteService)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $this->mailerLiteService->addUserToSubscriberList($event->user);
    }
}
