<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\TransportClient\Responses\BotResponse;

class Bot extends Action
{
    /**
     * @var string $type
     */
    protected $type = 'bot';

    /**
     * @return BotResponse
     */
    public function getMe()
    {
        return $this->request->post('getMe');
    }
}
