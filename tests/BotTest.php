<?php

namespace Tests;

use Teh9\Apigram\Client\TelegramClient;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{
    public function testGetMe()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));

        $response = $telegram->bot()->getMe();

        $this->assertTrue($response->status());
        $this->assertIsString($response->getFirstName());
        $this->assertIsString($response->getUserName());
    }
}
