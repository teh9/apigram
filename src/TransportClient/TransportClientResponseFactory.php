<?php

namespace Teh9\Apigram\TransportClient;

use Teh9\Apigram\TransportClient\TransportClientResponse;
use Teh9\Apigram\TransportClient\Responses\AssetsResponse;
use Teh9\Apigram\TransportClient\Responses\BotResponse;
use Teh9\Apigram\TransportClient\Responses\MessagesResponse;

class TransportClientResponseFactory
{
    /**
     * @param string|null $type
     * 
     * @return mixed
     */
    public static function make(?string $type)
    {
        switch ($type) {
            case 'messages': return new MessagesResponse;
            case 'bot': return new BotResponse;
            case 'assets': return new AssetsResponse;
            default: return new TransportClientResponse;
        }
    }
}
