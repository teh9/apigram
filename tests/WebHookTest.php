<?php

namespace Tests;

use Teh9\Apigram\Client\TelegramClient;
use PHPUnit\Framework\TestCase;

class WebHookTest extends TestCase
{
    public function testSetWrongWebhook()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
                
        try {
            $telegram->webhook()->set('http://localhost');
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertEquals(400, $e->getCode());
        }
    }

    public function testSetWebhook()
    {
        sleep(1);
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->webhook()->set(getenv('WEBHOOK_URL'));

        $this->assertTrue($response->status());
    }

    public function testRemoveWebhook()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));

        $response = $telegram->webhook()->remove();

        $this->assertTrue($response->status());
    }
}
