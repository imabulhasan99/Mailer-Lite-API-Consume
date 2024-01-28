<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MailerLiteService
{
    public function addUserToSubscriberList($userData)
    {
        return Http::mailerlite()->post('api/subscribers', [
            'email' => $userData['email'],
            'fields' => [
               'name'  => $userData['name'],
            ],
            'groups' => config('mailerlite.group_id'),
         ]);
    }
}
