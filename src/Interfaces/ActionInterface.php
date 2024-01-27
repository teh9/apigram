<?php

namespace Teh9\Apigram\Interfaces;

use Teh9\Apigram\Client\TelegramRequest;

interface ActionInterface
{
    /**
     * @param TelegramRequest $request
     */
    public function __construct(TelegramRequest $request);
}
