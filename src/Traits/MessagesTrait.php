<?php

namespace Teh9\Apigram\Traits;

trait MessagesTrait
{
    /**
     * @return static
     */
    public function to($chatId)
    {
        $this->actionConfig['chat_id'] = $chatId;
        return $this;
    }

    /**
     * @param string $mode
     * 
     * @return static
     */
    public function parseMode(string $mode)
    {
        $this->actionConfig['parse_mode'] = $mode;
        return $this;
    }
}
