<?php

namespace Teh9\Apigram\Traits;

trait MessagesTrait
{
    public function to($chatId)
    {
        $this->actionConfig['chat_id'] = $chatId;
        return $this;
    }
}
