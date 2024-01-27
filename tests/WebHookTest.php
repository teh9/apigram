<?php

namespace Tests;

use Teh9\Apigram\Client\TelegramClient;
use PHPUnit\Framework\TestCase;

class WebHookTest extends TestCase
{
    public function testSetWrongWebhook()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->webhook()->set('http://localhost');

        $this->assertFalse($response->status());
    }

    public function testSetWebhook()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->webhook()->set('https://github.com');

        $this->assertTrue($response->status());
    }
}
