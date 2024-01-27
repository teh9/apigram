<?php

namespace Teh9\Apigram\TransportClient\Responses;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class TransportClientResponseFactory
{
    public static function make(string $action)
    {
        switch ($action) {
            case 'messages': return new MessagesResponse;
            default: return new TransportClientResponse;
        }
    }
}
