<?php

namespace App\Services\BookStack;

class UserService
{
    protected BookStackClient $client;

    public function __construct(BookStackClient $client)
    {
        $this->client = $client;
    }

    public function createUser(array $userData)
    {
        return $this->client->post('users', $userData);
    }
}
