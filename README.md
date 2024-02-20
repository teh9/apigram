# APIGram Simple PHP Telegram API SDK
A lightweight and simple library for working with the Telegram Bot API, is under active development. But some methods are already available for work, see paragraph 3.

![Downloads](https://img.shields.io/packagist/dt/teh9/apigram)
![Version](https://img.shields.io/github/v/release/teh9/apigram)
![Build](https://github.com/teh9/apigram/actions/workflows/php.yml/badge.svg)

## 1. Prerequisites
- PHP >= 7.2.5

## 2. Installation
```
composer require teh9/apigram
```

## 3. Initialization

```php 
$client = \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
```

<details>
  <summary><b>1. Messages</b></summary>
  
##### Send message:

```php
$chatId = 1;

$apigram = new \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $apigram->messages()->to($chatId)->send('text');

$response->getMessageId(); // Get message id

```
##### Edit message:

```php
$chatId = 1;
$apigram = new \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $apigram->messages()->edit('TELEGRAM_CHAT_ID', 'MESSAGE_ID', 'lorem ipsum new text');

var_dump($response->getMessageText()); // lorem ipsum new text

```

</details>

<details>
  <summary><b>2. Webhook</b></summary>

##### Set webhook:
```php
$webhookUrl = 'https://yourwebhook.net';

$apigram = new \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $apigram->webhook()->set($webhookUrl);

var_dump($response->status()); // true/false
```

##### Remove webhook:
```php
$apigram = new \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $apigram->webhook()->remove();

var_dump($response->status()); // true/false
```
</details>

<details>
  <summary><b>3. Bot</b></summary>

##### Get me (info about bot):
```php
$apigram = new \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $apigram->bot()->getMe();

var_dump($response->getId()); // Bot id
var_dump($response->getFirstName()); // Bot name
var_dump($response->getUserName()); // Bot login
```
</details>

<details>
  <summary><b>4. Assets</b></summary>

##### Send photo:
```php
$imagePath = 'https://i.imgur.com/SVm9n13_d.jpg';

$apigram = new TelegramClient(getenv('TELEGRAM_BOT_TOKEN'));
$response = $apigram->assets()->to(getenv('TELEGRAM_CHAT_ID'))->sendPhoto($imagePath);
// or
$response = $apigram->assets()->to(getenv('TELEGRAM_CHAT_ID'))->caption('test caption')->sendPhoto($imagePath);


var_dump($response->status());
var_dump($response->getMessageId());
```
</details>

## License
The MIT License (MIT). Please see <a href="https://github.com/teh9/apigram/blob/master/LICENSE">License File</a> for more information.
