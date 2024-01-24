<?php

namespace Teh9\Apigram\TransportClient;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class TransportClient
{
    protected $guzzleClient;

    protected $initialConfig = [
        RequestOptions::CONNECT_TIMEOUT => 10,
    ];

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function setTimeout(int $timeout)
    {
        $this->initialConfig['timeout'] = $timeout;
        return $this;
    }

    public function post(string $url, array $payload)
    {
        try {
            return $this->guzzleClient->post($url, array_merge(
                ['json' => $payload],
                $this->initialConfig
            ));
        } catch (Exception $e) {
            //
        }
    }
}
