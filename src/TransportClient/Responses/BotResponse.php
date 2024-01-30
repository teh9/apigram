<?php

namespace Teh9\Apigram\TransportClient\Responses;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class BotResponse extends TransportClientResponse
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->content->result->id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->content->result->first_name;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->content->result->username;
    }
}
