<?php

namespace Teh9\Apigram\TransportClient;

use Psr\Http\Message\ResponseInterface;

class TransportClientResponse
{
    protected $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }
}
