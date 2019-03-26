<?php


namespace Basecamp\Resources;


class Event extends Resource
{

    public function getAll($projectId, $recordingId)
    {
        $endpoint = "/buckets/{$projectId}/recordings/{$recordingId}/events.json";
        return $this->client->request('get', $endpoint);
    }
}