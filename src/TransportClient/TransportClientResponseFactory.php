<?php

namespace Teh9\Apigram\TransportClient;

use Teh9\Apigram\TransportClient\TransportClientResponse;
use Teh9\Apigram\TransportClient\Responses\MessagesResponse;

class TransportClientResponseFactory
{
    public static function make(?string $action)
    {
        switch ($action) {
            case 'messages': return new MessagesResponse;
            default: return new TransportClientResponse;
        }
    }
}
