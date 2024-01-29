<?php

namespace Tests;

use Teh9\Apigram\Client\TelegramClient;
use PHPUnit\Framework\TestCase;

class ChannelsTest extends TestCase
{
    protected $channelId;

    public function testCreateChannel()
    {
        $apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $apigram->channels()->create('JustForTest' . time());
        $this->channelId = $response->getChannelId();

        $this->assertTrue($response->status());
        $this->assertIsInt($this->channelId);
        $this->assertLessThan(0, $this->channelId);
    }

    public function testDeleteChannel()
    {
        $apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $apigram->channels()->delete($this->channelId);

        $this->assertTrue($response->status());
    }
}
