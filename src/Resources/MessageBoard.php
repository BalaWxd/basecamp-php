<?php


namespace Basecamp\Resources;


class MessageBoard extends Resource
{

    public function get($projectId, $messageBoardId)
    {
        $endpoint = "/buckets/{$projectId}/message_boards/{$messageBoardId}.json";
        return $this->client->request('get', $endpoint);
    }
}