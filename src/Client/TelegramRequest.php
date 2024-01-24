<?php

namespace Teh9\Apigram\Client;

use Exception;
use Teh9\Apigram\TransportClient\TransportClient;

class TelegramRequest
{
    protected const CONNECTION_TIMEOUT = 10;

    protected $accessToken;

    protected const API_HOST = 'https://api.telegram.org/bot';

    protected $client;

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->client = new TransportClient();
    }

    public function post(string $method, array $params = [])
    {
        $url = self::API_HOST . $this->accessToken . '/' . $method;

        try {
            $this->client->post($url, $params);
        } catch (Exception $e) {

        }
    }
}
