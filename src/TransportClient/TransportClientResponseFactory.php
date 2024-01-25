<?php

namespace Teh9\Apigram\TransportClient\Responses;

class TransportClientResponseFactory
{
    public static function make(string $action)
    {
        switch ($action) {
            case 'messages': return new MessagesResponse;
        }
    }
}
