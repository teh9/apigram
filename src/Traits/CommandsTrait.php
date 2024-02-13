<?php

namespace Teh9\Apigram\Traits;

trait CommandsTrait
{
    /**
     * @param string
     * @param string
     * 
     * @return static
     */
    public function command(string $command, string $description)
    {
        $this->actionConfig['commands'][] = ['command' => $command, 'description' => $description]

        return $this;
    }

    /**
     * @param string - all_private_chats
     * 
     * @return static
     */
    public function scope(string $type)
    {
        $this->actionConfig['scope'] = ['type' => $type];

        return $this;
    }

    /**
     * @param string
     * 
     * @return static
     */
    public function language(string $lang = 'en')
    {
        $this->actionConfig['language_code'] = $lang;

        return $this;
    }
}
