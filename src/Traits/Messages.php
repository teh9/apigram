<?php

namespace Teh9\Apigram\Traits;

trait Messages
{
    public function to($chatId)
    {
        $this->actionConfig['chat_id'] = $chatId;
        return $this;
    }

    public function fromChatId(int $fromChatId)
    {
        $this->actionConfig['from_chat_id'] = $fromChatId;
        return $this;
    }

    public function messageId(int $messageId)
    {
        $this->actionConfig['message_id'] = $messageId;
        return $this;
    }

    public function text(string $text)
    {
        $this->actionConfig['text'] = $text;
        return $this;
    }
}
