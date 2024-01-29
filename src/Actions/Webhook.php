<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\TransportClient\TransportClientResponse;

class Webhook extends Action
{
    /**
     * @param string $url
     * @param array $params
     * 
     * @return TransportClientResponse
     */
    public function set(string $url, array $params = [])
    {
        $this->actionConfig['url'] = $url;
        return $this->request->post('setWebhook', $this->parseParams($params));
    }

    /**
     * @return TransportClientResponse
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
