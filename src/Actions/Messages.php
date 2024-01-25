<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Traits\Messages as TraitsMessages;

class Messages extends Action
{
    use TraitsMessages;

    public function send(string $text, array $params = [])
    {
        return $this->text($text)->request->post('sendMessage', $this->parseParams($params));
    }

    public function forward($fromChatId, $messageId, array $params = [])
    {
        return $this->fromChatId($fromChatId)
                    ->messageId($messageId)
                    ->request
                    ->post('forwardMessage', $this->parseParams($params));
    }

    public function search()
    {
        //
    }

    public function getMessageId()
    {
        return $this->request->getResponse();
    }
}
