<?php

namespace Teh9\Apigram\TransportClient;

use Psr\Http\Message\ResponseInterface;

class TransportClientResponse
{
    /**
     * @var $content
     */
    protected $content;

    /**
     * @var $headers
     */
    protected $headers;

    /**
     * @var $body
     */
    protected $body;

    /**
     * @var $statusCode
     */
    protected $code;

    public function get()
    {
        return $this->content;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function status()
    {
        return $this->content->ok;
    }

    public function parse(ResponseInterface $response)
    {
        $this->headers = $response->getHeaders();
        $this->body = $response->getBody();
        $this->code = $response->getStatusCode();
        $this->content = json_decode($this->body->getContents());

        return $this;
    }
}
