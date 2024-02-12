<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Traits\CommandsTrait;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class Commands extends Action
{
    use CommandsTrait;

    /**
     * @var string
     */
    protected $type = 'commands';

    /**
     * @param array
     * 
     * @return TransportClientResponse
     */
    public function setMyCommands(array $commands = [])
    {
        return $this->request->post('setMyCommands', $this->parseParams($commands));
    }

    /**
     * @return TransportClientResponse
     */
    public function getMyCommands()
    {
        return $this->request->post('getMyCommands', $this->parseParams([]));
    }
}
