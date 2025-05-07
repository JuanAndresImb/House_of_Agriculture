<?php

namespace App\Services\BookStack;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class UserService
{
    protected BookStackClient $client;

    public function __construct(BookStackClient $client)
    {
        $this->client = $client;
    }


   
    public function createUser(array $userData)
    {
        $url = '/users';
    
        Log::info('BookStack → création utilisateur : données envoyées', $userData);
    
        $response = Http::withHeaders([
            'Authorization' => 'Token ' . config('services.bookstack.token'),
            'Accept' => 'application/json',
        ])->post(config('services.bookstack.url') . $url, $userData);
    
        // Log status + body
        Log::info('Réponse BookStack API', [
            'status' => $response->status(),
            'body'   => $response->json(), // ou ->body() si tu veux brut
        ]);
    
        return $response->json();
    }
    
    
}
