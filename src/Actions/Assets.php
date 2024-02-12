<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Actions\Action;
use Teh9\Apigram\Traits\AssetsTrait;
use Teh9\Apigram\TransportClient\Responses\AssetsResponse;
use Teh9\Apigram\Traits\MessagesTrait;

class Assets extends Action
{
    use MessagesTrait, AssetsTrait;

    /**
     * @var string $type
     */
    protected $type = 'assets';

    /**
     * @param string
     * @param array
     * 
     * @return AssetsResponse
     */
    public function sendPhoto(string $imagePath, array $params = [])
    {
        $this->uploadFile($imagePath, 'photo');

        return $this->request->multipart('sendPhoto', $this->parseParams([]));
    }

    public function sendAudio()
    {
        //
    }

    public function sendDocument()
    {
        //
    }

    public function sendSticker()
    {
        //
    }

    public function sendVoice()
    {
        //
    }

    public function sendLocation()
    {
        //
    }
}
