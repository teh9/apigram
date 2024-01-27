# APIGram Simple PHP Telegram API SDK
A lightweight and simple library for working with the Telegram Bot API, is under active development. But some methods are already available for work, see paragraph 3.
![Packagist downloads](https://img.shields.io/packagist/dt/teh9/apigram)
![Version](https://img.shields.io/github/v/release/teh9/apigram)

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
#### 3.1. Messages
##### Send message:

```php
$chatId = 1;

$client = \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $client->messages()->to($chatId)->send('text');

$response->getMessageId(); // Get message id

```

#### 3.2. Webhook
##### Set webhook:
```php
$webhookUrl = 'https://yourwebhook.net';

$client = \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $client->webhook()->set($webhookUrl);

var_dump($response->status()); // true/false
```

##### Remove webhook:
```php
$client = \Teh9\Apigram\Client\TelegramClient('BOT_API_TOKEN');
$response = $client->webhook()->remove();

var_dump($response->status()); // true/false
```

## License
The MIT License (MIT). Please see <a href="https://github.com/teh9/apigram/blob/master/LICENSE">License File</a> for more information.
