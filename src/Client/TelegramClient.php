<?php

namespace Teh9\Apigram\Client;

use Teh9\Apigram\Actions\Messages;
use Teh9\Apigram\Actions\Webhook;

class TelegramClient
{
    protected $request;

    public function __construct(string $accessToken)
    {
        $this->request = new TelegramRequest($accessToken);
    }
    
    public function messages()
    {
        return new Messages($this->request);
    }

    public function webhook()
    {
        return new Webhook($this->request);
    }
}
