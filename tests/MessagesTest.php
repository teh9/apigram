<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class MessagesTest extends TestCase
{
    public function testSendMessage()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->messages()->to(getenv('TELEGRAM_CHAT_ID'))->send('test');

        $this->assertTrue($response->status());
        $this->assertIsInt($response->getMessageId());
    }
}
