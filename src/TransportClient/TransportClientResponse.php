<?php

namespace Teh9\Apigram\TransportClient;

use Psr\Http\Message\ResponseInterface;

class TransportClientResponse
{
    protected $response;

    protected $header;

    protected $body;

    protected $statusCode;

    public function get()
    {
        return $this->response;
    }

    public function parseResponse(ResponseInterface $response)
    {
        $this->header = $response->getHeaders();
        $this->body = $response->getBody();
        $this->statusCode = $response->getStatusCode();

        return $this->response = json_decode($this->body->getContents());
    }
}
