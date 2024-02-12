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
        $file = [
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

        $this->actionConfig = array_merge($file, $this->actionConfig);
    }

    public function caption(string $caption)
    {
        $caption = [
            [
                'name' => 'caption',
                'contents' => $caption
            ]
        ];

        $this->actionConfig = array_merge($caption, $this->actionConfig);
    }
}
