<?php

namespace Teh9\Apigram\TransportClient\Responses;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class MessagesResponse extends TransportClientResponse
{
    public function getMessageId()
    {
        return $this->content->result->message_id;
    }
}
