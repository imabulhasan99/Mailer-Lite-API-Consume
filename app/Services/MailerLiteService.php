<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MailerLiteService
{
    public function addUserToSubscriberList($userData)
    {
        $response = Http::mailerlite()->post('api/subscribers', [
            'email' => $userData['email'],
            'fields' => [
               'name'  => $userData['name'],
            ],
            'groups' => [
                111570690059011758
            ],
         ]);
         
          return $response;
    }
}
