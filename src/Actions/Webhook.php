<?php

namespace Teh9\Apigram\Actions;

class Webhook extends Action
{
    /**
     * @param string $url
     * @param array $params
     * 
     * @return mixed
     */
    public function set(string $url, array $params = [])
    {
        $this->actionConfig['url'] = $url;
        return $this->request->post('setWebhook', $this->parseParams($params));
    }

    /**
     * @return mixed
     */
    public function remove()
    {
        return $this->request->post('setWebhook?remove');
    }

    public function getInfo()
    {
        //
    }
}
