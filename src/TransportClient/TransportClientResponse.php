<?php

namespace Teh9\Apigram\TransportClient;

use Psr\Http\Message\ResponseInterface;

class TransportClientResponse
{
    protected $response;

    public function get()
    {
        return $this->response;
    }

    public function parseResponse(ResponseInterface $response)
    {
        $this->response = $response;
    }
}
