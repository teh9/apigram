<?php

namespace Teh9\Apigram\Traits;

trait InlineKeyboardTrait
{
    /**
     * @param string
     * @param string
     * 
     * @return static
     */
    public function keyboard(string $text, string $button)
    {
        $this->actionConfig['inline_keyboard'][] = [['text' => $text, 'callback_data' => $button]];
        
        return $this;
    }

    /**
     * @return static
     */
    public function setCustomKeyboard(array $keyboard)
    {
        $this->actionConfig['inline_keyboard'][] = $keyboard;

        return $this;
    }
}
