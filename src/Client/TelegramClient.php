<?php

namespace Teh9\Apigram\Client;

use Teh9\Apigram\Actions\Assets;
use Teh9\Apigram\Actions\Channels;
use Teh9\Apigram\Actions\Messages;
use Teh9\Apigram\Actions\Webhook;

class TelegramClient
{
    /**
     * @var TelegramRequest $request
     */
    protected $request;

    public function __construct(string $accessToken)
    {
        $this->request = new TelegramRequest($accessToken);
    }
    
    /**
     * @return Messages
     */
    public function messages()
    {
        return new Messages($this->request);
    }

    /**
     * @return Webhook
     */
    public function webhook()
    {
        return new Webhook($this->request);
    }

    /**
     * @return Assets
     */
    public function assets()
    {
        return new Assets($this->request);
    }

    /**
     * @return Channels
     */
    public function channels()
    {
        return new Channels($this->request);
    }
}
