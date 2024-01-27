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
            $response = $telegram->webhook()->set('http://localhost');
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertFalse($response->status());
            $this->assertEquals(400, $response->getStatusCode());
        }
    }

    public function testSetWebhook()
    {
        sleep(1);
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->webhook()->set(getenv('WEBHOOK_URL'));

        $this->assertTrue($response->status());
    }
}
