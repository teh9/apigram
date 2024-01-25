<?php

namespace Teh9\Apigram\Actions;

class Webhook extends Action
{
    public function set($url, array $params = [])
    {
        $this->actionConfig['url'] = $url;
        return $this->request->post('setWebhook', $this->parseParams($params));
    }

    public function remove()
    {
        return $this->request->post('setWebhook?remove');
    }

    public function getInfo()
    {
        //
    }
}
