<?php


namespace Basecamp\Resources;


class Forward extends Resource
{

    public function getAll($projectId, $inboxId)
    {
        $endpoint = "/buckets/{$projectId}/inboxes/{$inboxId}/forwards.json";
        return $this->client->request('get', $endpoint);
    }

    public function get($projectId, $inboxForwardId)
    {
        $endpoint = "/buckets/{$projectId}/inbox_forwards/{$inboxForwardId}.json";
        return $this->client->request('get', $endpoint);
    }
}