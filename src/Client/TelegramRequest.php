<?php

namespace Teh9\Apigram\Client;

class TelegramRequest
{
    protected const CONNECTION_TIMEOUT = 10;

    protected $accessToken;

    protected const API_HOST = 'https://api.telegram.org/bot';

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function post()
    {
        //
    }
}
