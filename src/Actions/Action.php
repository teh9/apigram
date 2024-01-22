<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Client\TelegramRequest;
use Teh9\Apigram\Interfaces\ActionInterface;

abstract class Action implements ActionInterface
{
    protected $request;

    public function __construct(TelegramRequest $telegramRequest)
    {
        $this->request = $telegramRequest;
    }
}
