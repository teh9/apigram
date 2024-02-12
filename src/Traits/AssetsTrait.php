<?php

namespace Teh9\Apigram\Traits;

trait AssetsTrait
{
    /**
     * @param string
     * 
     * @return void
     */
    public function uploadFile(string $path, string $type)
    {
        $this->actionConfig['multipart'] = [
            [
                'name' => 'chat_id',
                'contents' => $this->actionConfig['chat_id'],
            ],
            [
                'name' => $type,
                'contents' => fopen($path, 'r'),
                'filename' => basename($path),
            ] 
        ];
    }
}
