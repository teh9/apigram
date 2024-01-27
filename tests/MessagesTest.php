<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class MessagesTest extends TestCase
{
    protected $accessToken;

    protected $chatId;

    public function testSendMessage()
    {
        echo "TELEGRAM_BOT_TOKEN: " . getenv('TELEGRAM_BOT_TOKEN') . PHP_EOL;
        echo "TELEGRAM_CHAT_ID: " . getenv('TELEGRAM_CHAT_ID') . PHP_EOL;

        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->messages()->to(getenv('TELEGRAM_CHAT_ID'))->send('test');

        $this->assertTrue($response->status());
        $this->assertIsInt($response->getMessageId());
    }
}
