<?php

namespace App\Services\BookStack;

use Illuminate\Support\Facades\Http;

class BookStackClient
{
    protected string $baseUrl;
    protected string $token;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.bookstack.url'), '/');
        $this->token = config('services.bookstack.token');
    }

    protected function getHeaders(): array
    {
        return [
            'Authorization' => 'Token ' . $this->token,
            'Accept' => 'application/json',
        ];
    }

    public function get(string $endpoint)
    {
        return Http::withHeaders($this->getHeaders())
            ->get("{$this->baseUrl}{$endpoint}")
            ->json();
    }

    public function post(string $endpoint, array $data)
    {
        return Http::withHeaders($this->getHeaders())
            ->post("{$this->baseUrl}{$endpoint}", $data)
            ->json();
    }

    public function put(string $endpoint, array $data)
    {
        return Http::withHeaders($this->getHeaders())
            ->put("{$this->baseUrl}{$endpoint}", $data)
            ->json();
    }

    public function delete(string $endpoint)
    {
        return Http::withHeaders($this->getHeaders())
            ->delete("{$this->baseUrl}{$endpoint}")
            ->json();
    }
}
