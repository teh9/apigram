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
        $this->actionConfig[] = ['command' => $command, 'description' => $description];
        return $this;
    }
}
