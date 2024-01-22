<?php

namespace Teh9\Apigram\TransportClient;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class TransportClient
{
    protected $client;

    protected $initialConfig = [
        RequestOptions::CONNECT_TIMEOUT => 10,
    ];

    public function __construct()
    {
        $this->client = new Client();
    }

    public function post(string $url, array $payload)
    {
        return $this->client->post($url, array_merge(
            ['json' => $payload],
            $this->initialConfig
        ));
    }
}
