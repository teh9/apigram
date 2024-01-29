<?php

namespace Teh9\Apigram\TransportClient;

use Teh9\Apigram\TransportClient\Responses\ChannelsResponse;
use Teh9\Apigram\TransportClient\TransportClientResponse;
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
            case 'channels': return new ChannelsResponse;
            default: return new TransportClientResponse;
        }
    }
}
