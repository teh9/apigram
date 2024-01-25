<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Client\TelegramRequest;
use Teh9\Apigram\Interfaces\ActionInterface;

abstract class Action implements ActionInterface
{
    protected $request;

    protected $actionConfig;

    public function __construct(TelegramRequest $telegramRequest)
    {
        $this->request = $telegramRequest;
    }

    protected function parseParams(array $params = [])
    {
        return array_merge($this->actionConfig, $params);    
    }
}
