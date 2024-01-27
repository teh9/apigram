<?php

namespace Teh9\Apigram\Client;

use Exception;
use Teh9\Apigram\TransportClient\TransportClient;
use Teh9\Apigram\TransportClient\TransportClientResponseFactory;

class TelegramRequest
{
    protected const CONNECTION_TIMEOUT = 10;

    protected const API_HOST = 'https://api.telegram.org/bot';

    /**
     * @var string $accessToken
     */
    protected $accessToken;

    /**
     * @var TransportClient $client
     */
    protected $client;
    
    /**
     * @var mixed $response
     */
    protected $response;

    /**
     * @param string $accessToken
     */
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->client = new TransportClient();
    }

    /**
     * @param string $method
     * @param array $params
     * 
     * @return mixed
     */
    public function post(string $method, array $params = [])
    {
        $url = self::API_HOST . $this->accessToken . '/' . $method;

        $params = $this->prepareRequest($params);

        $response = $this->client->post($url, $params);

        return $this->response->parse($response);
    }

    /**
     * @param array $params
     * 
     * @return array
     */
    protected function prepareRequest(array $params)
    {
        $action = null;
        if (isset($params['action'])) {
            $action = $params['action'];
            unset($params['action']);
        }
        
        $this->response = TransportClientResponseFactory::make($action);
        
        return $params;
    }
}
