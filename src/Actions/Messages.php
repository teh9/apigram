<?php

namespace Teh9\Apigram\Actions;

class Messages extends Action
{
    public function to($chatId)
    {
        $this->actionConfig['chat_id'] = $chatId;
        return $this;
    }

    public function send(string $text, array $params = [])
    {
        $this->actionConfig['text'] = $text;
        
        return $this->request->post('sendMessage', $this->parseParams($params));
    }

    public function forward($fromChatId, $messageId, array $params = [])
    {
        $this->actionConfig['from_chat_id'] = $fromChatId;
        $this->actionConfig['message_id'] = $messageId;

        return $this->request->post('forwardMessage', $this->parseParams($params));
    }

    public function getMessageId()
    {
        return $this->request->getResponse();
    }
}
