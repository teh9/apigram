<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class AssetsTest extends TestCase
{
    public function testSendPhoto()
    {
        $imagePath = 'https://i.imgur.com/SVm9n13_d.jpg';

        $apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $apigram->assets()->to(getenv('TELEGRAM_CHAT_ID'))->sendPhoto($imagePath);

        $this->assertTrue($response->status());
        $this->assertIsInt($response->getMessageId());
    }

    public function testSendPhotoWithCaption()
    {
        $imagePath = 'https://i.imgur.com/SVm9n13_d.jpg';

        $apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $apigram->assets()->caption('test caption')->to(getenv('TELEGRAM_CHAT_ID'))->sendPhoto($imagePath);

        $this->assertTrue($response->status());
        $this->assertIsInt($response->getMessageId());

    }
}
