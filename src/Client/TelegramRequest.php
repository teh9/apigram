<?php

namespace Teh9\Apigram\Client;

use Exception;
use Teh9\Apigram\TransportClient\TransportClient;
use Teh9\Apigram\TransportClient\TransportClientResponseFactory;

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

    /**
     * @param string $method
     * @param array $params
     * 
     * @return TransportCLientResponseFactory
     */
    public function post(string $method, array $params = [])
    {
        $url = self::API_HOST . $this->accessToken . '/' . $method;

        $params = $this->prepareRequest($params);

        try {
            $response = $this->client->post($url, $params);
        } catch (Exception $e) {

        }

        return $this->response->parse($response);
    }

    /**
     * @param array $params
     * 
     * @return array
     */
    protected function prepareRequest(array $params)
    {
        $this->response = TransportClientResponseFactory::make($params['action']);
        unset($params['action']);
        
        return $params;
    }
}
