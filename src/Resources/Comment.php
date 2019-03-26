<?php


namespace Basecamp\Resources;

/**
 * Class Comment
 * @package Basecamp\Resources
 */
class Comment extends Resource
{

    /**
     * @param $projectId
     * @param $recordingId
     */
    public function getAll($projectId, $recordingId)
    {
        $endpoint = "/buckets/{$projectId}/recordings/{$recordingId}/comments.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $commentId
     */
    public function get($projectId, $commentId)
    {
        $endpoint = "/buckets/{$projectId}/comments/{$commentId}.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $recordingId
     * @param $content
     */
    public function create($projectId, $recordingId, $content)
    {
        $endpoint = "/buckets/{$projectId}/recordings/{$recordingId}/comments.json";
        $options['body'] = json_encode(['content' => $content]);
        $this->client->request('post', $endpoint, $options);
    }

    /**
     * @param $projectId
     * @param $commentId
     * @param $content
     */
    public function update($projectId, $commentId, $content)
    {
        $endpoint = "/buckets/{$projectId}/comments/{$commentId}.json";
        $options['body'] = json_encode(['content' => $content]);
        return $this->client->request('put', $endpoint);
    }
}