<?php


namespace Basecamp\Resources;


class InboxReply extends Resource
{

    public function getAll($projectId, $forwardId)
    {
        $endpoint = "/buckets/{$projectId}/inbox_forwards/{$forwardId}/replies.json";
        return $this->client->request('get', $endpoint);
    }

    public function get($projectId, $forwardId, $replyId)
    {
        $endpoint = "/buckets/{$projectId}/inbox_forwards/{$forwardId}/replies/{$replyId}.json";
        return $this->client->request('get', $endpoint);
    }
}