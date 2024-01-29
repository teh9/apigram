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

    public function testEditMessage()
    {
        $telegram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->messages()->to(getenv('TELEGRAM_CHAT_ID'))->send('edit');

        $messageToEdit = 'edit2'; 
        $response = $telegram->messages()->edit(getenv('TELEGRAM_CHAT_ID'), $response->getMessageId(), $messageToEdit);

        $this->assertTrue($response->status());
        $this->assertSame($messageToEdit, $response->getMessageText());
    }
}
