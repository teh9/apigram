<?php

namespace Teh9\Apigram\TransportClient;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class TransportClient
{
    protected $guzzleClient;

    protected $initialConfig = [
        RequestOptions::TIMEOUT => 10,
    ];

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function setTimeout(int $timeout)
    {
        $this->initialConfig[RequestOptions::TIMEOUT] = $timeout;
        return $this;
    }

    /**
     * @param string
     * @param array
     * 
     * @return ResponseInterface
     */
    public function post(string $url, array $payload)
    {
        try {
            return $this->guzzleClient->request('POST', $url, array_merge($payload, $this->initialConfig));
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}
