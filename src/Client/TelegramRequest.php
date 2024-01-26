<?php

namespace Teh9\Apigram\Client;

use Exception;
use Teh9\Apigram\TransportClient\Responses\TransportClientResponseFactory;
use Teh9\Apigram\TransportClient\TransportClient;

class TelegramRequest
{
    protected const CONNECTION_TIMEOUT = 10;

    protected $accessToken;

    protected const API_HOST = 'https://api.telegram.org/bot';

    protected $client;
    
    protected $response;

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->client = new TransportClient();
    }

    public function post(string $method, array $params = [])
    {
        $url = self::API_HOST . $this->accessToken . '/' . $method;

        if (isset($params['action'])) unset($params['action']);

        try {
            $response = $this->client->post($url, $this->prepareRequest($params));
        } catch (Exception $e) {

        }

        return $this->response->parse($response);
    }

    protected function prepareRequest(array $params)
    {
        $this->response = TransportClientResponseFactory::make($params['action']);
        unset($params['action']);
        
        return $params;
    }
}
