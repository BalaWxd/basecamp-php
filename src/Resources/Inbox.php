<?php


namespace Basecamp\Resources;


class Inbox extends Resource
{

    public function get($projectId, $inboxId)
    {
        $endpoint = "/buckets/{$projectId}/inboxes/{$inboxId}.json";
        return $this->client->request('get', $endpoint);
    }
}