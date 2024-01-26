<?php

namespace Teh9\Apigram\TransportClient;

use Psr\Http\Message\ResponseInterface;

class TransportClientResponse
{
    protected $response;

    protected $headers;

    protected $body;

    protected $statusCode;

    public function get()
    {
        return $this->response;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function parse(ResponseInterface $response)
    {
        $this->headers = $response->getHeaders();
        $this->body = $response->getBody();
        $this->statusCode = $response->getStatusCode();

        return $this->response = json_decode($this->body->getContents());
    }
}
