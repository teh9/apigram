<?php

namespace Teh9\Apigram\TransportClient\Responses;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class MessagesResponse extends TransportClientResponse
{
    /**
     * @return int
     */
    public function getMessageId()
    {
        return $this->content->result->message_id;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->content->result->text;
    }
}
