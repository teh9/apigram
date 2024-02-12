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
        if (!isset($this->actionConfig['chat_id'])) throw new \Exception('Provide chat id');

        $file = [
            [
                'name' => 'chat_id',
                'contents' => $this->actionConfig['chat_id'],
            ],
            [
                'name' => $type,
                'contents' => file_get_contents($path),
                'filename' => basename($path),
            ] 
        ];

        unset($this->actionConfig['chat_id']);

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
