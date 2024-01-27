<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Traits\MessagesTrait;

class Messages extends Action
{
    use MessagesTrait;

    /**
     * @var $action
     */
    protected $action = 'messages';

    /**
     * @param string $text
     * @param array $params
     * 
     * @return mixed
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
     * @return \Teh9\Apigram\TransportClient\TransportClientResponse
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
