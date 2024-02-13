<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Teh9\Apigram\Client\TelegramClient;

class CommandsTest extends TestCase
{
    public function testSetCommands()
    {
        $apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
        $response = $apigram->commands()
                            ->scope('all_private_chats')
                            ->language()
                            ->command('testCommand', 'test description')
                            ->command('testCommand_1', 'test description 1')
                            ->setMyCommands();

        $this->assertTrue($response->status());
    }
}
