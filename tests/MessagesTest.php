<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class MessagesTest extends TestCase
{
    protected $accessToken;

    protected $chatId;

    public function __construct()
    {
        $this->accessToken = getenv('TELEGRAM_BOT_TOKEN');
        $this->chatId = getenv('TELEGRAM_CHAT_ID');
    }

    public function testSendMessage()
    {
        $telegram = new TelegramClient($this->accessToken);
        $response = $telegram->messages()->to($this->chatId)->send('test');

        $this->assertTrue($response->status());
        $this->assertIsInt($response->getMessageId());
    }
}
