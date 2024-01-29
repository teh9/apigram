<?php

namespace Teh9\Apigram\TransportClient\Responses;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class ChannelsResponse extends TransportClientResponse
{
    /**
     * @return int
     */
    public function getChannelId()
    {
        return $this->content->result->id;
    }
}
