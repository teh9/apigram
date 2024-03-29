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
     * - @var mixed chat_id
	 * - @var string text
	 * - @var string parse_mode
	 * - @var string disable_web_page_preview
	 * - @var bool disable_notification
	 * - @var int reply_to_message_id
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

    /**
     * @param mixed $chatId
     * @param int $messageId
     * @param string $text
     * @param array $params
     * 
     * @return MessagesResponse
     */
    public function edit(mixed $chatId, int $messageId, string $text, array $params = [])
    {
        $this->actionConfig['chat_id'] = $chatId;
        $this->actionConfig['message_id'] = $messageId;
        $this->actionConfig['text'] = $text;

        return $this->request->post('editMessageText', $this->parseParams($params));
    }

    public function search()
    {
        //
    }
}
