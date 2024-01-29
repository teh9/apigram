<?php

namespace Teh9\Apigram\Actions;

use Teh9\Apigram\Actions\Action;
use Teh9\Apigram\TransportClient\Responses\ChannelsResponse;

class Channels extends Action
{
    /**
     * @var string $channels
     */
    protected $type = 'channels';

    /**
     * @param string $title
     * @param array $params
     * 
     * @return ChannelsResponse
     */
    public function create(string $title, array $params = [])
    {
        $this->actionConfig['title'] = $title;

        return $this->request->post('createChannel', $this->parseParams($params));
    }

    /**
     * @param int $channelId
     * 
     * @return ChannelsResponse
     */
    public function delete(int $channelId)
    {
        $this->actionConfig['channel'] = $channelId;

        return $this->request->post('deleteChannel', $this->parseParams());
    }

    public function join()
    {
        //
    }

    public function leave()
    {
        //
    }
}
