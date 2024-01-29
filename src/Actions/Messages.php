<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Traits\MessagesTrait;
use Teh9\Apigram\TransportClient\Responses\MessagesResponse;

class Messages extends Action
{
    use MessagesTrait;

    /**
     * @var string $type
     */
    protected $type = 'messages';

    /**
     * @param string $text
     * @param array $params
     * 
     * @return MessagesResponse
     */
    public function send(string $text, array $params = [])
    {
        $this->actionConfig['text'] = $text;

        return $this->request->post('sendMessage', $this->parseParams($params));
    }
    
    /**
     * @param mixed $fromChatId
     * @param int $messageId
     * @param array $params
     * 
     * @return MessagesResponse
     */
    public function forward(mixed $fromChatId, int $messageId, array $params = [])
    {
        $this->actionConfig['from_chat_id'] = $fromChatId;
        $this->actionConfig['message_id'] = $messageId;

        return $this->request->post('forwardMessage', $this->parseParams($params));
    }

    public function search()
    {
        //
    }
}
