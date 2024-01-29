<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class MessagesTest extends TestCase
{
    protected $messageId;

    public function testSendMessage()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->messages()->to(getenv('TELEGRAM_CHAT_ID'))->send('test');

        $this->messageId = $response->getMessageId();

        $this->assertTrue($response->status());
        $this->assertIsInt($this->messageId);
    }

    public function testEditMessage()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->messages()->edit(getenv('TELEGRAM_CHAT_ID'), $this->messageId, 'test2');

        $this->assertTrue($response->status());
    }
}
