<?php

namespace Teh9\Apigram\Client;

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
        $params = $this->prepareRequest($params);

        echo '<pre>'; print_r($params); echo '</pre>'; die;
        
        return $this->request($method, ['form_params' => $params]);
    }
    
    public function multipart(string $method, array $params = [])
    {
        $params = $this->prepareRequest($params);

        return $this->request($method, ['multipart' => $params]);
    }
    
    protected function request(string $method, $params)
    {
        $url = self::API_HOST . $this->accessToken . '/' . $method;
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
        $type = null;
        if (isset($params['type'])) {
            $type = $params['type'];
            unset($params['type']);
        }
        
        $this->response = TransportClientResponseFactory::make($type);
        
        return $params;
    }
}
