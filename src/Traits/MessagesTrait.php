<?php

namespace Teh9\Apigram\Traits;

trait MessagesTrait
{
    /**
     * @param mixed $chatId
     * 
     * @return static
     */
    public function to(mixed $chatId)
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

    /**
     * @param mixed $fromChatId
     * 
     * @return static
     */
    public function from(mixed $fromChatId)
    {
        $this->actionConfig['from_chat_id'] = $fromChatId;
        return $this;
    }

    /**
     * @param int $messageId
     * 
     * @return static
     */
    public function messageId(int $messageId)
    {
        $this->actionConfig['message_id'] = $messageId;
        return $this;
    }
}
