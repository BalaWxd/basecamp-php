<?php


namespace Basecamp\Resources;


class ClientReply extends Resource
{

    /**
     * @param $projectId
     * @param $recordingId
     */
    public function getAll($projectId, $recordingId)
    {
        $endpoint = "/buckets/{$projectId}/client/recordings/{$recordingId}/replies.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $recordingId
     * @param $replyId
     */
    public function get($projectId, $recordingId, $replyId)
    {
        $endpoint = "/buckets/{$projectId}/client/recordings/{$recordingId}/replies/{$replyId}.json";
        return $this->client->request('get', $endpoint);
    }
}