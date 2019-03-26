<?php
/**
 * Implementation of Campfire.
 *
 * @see https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#delete-a-campfire-line
 */

namespace Basecamp\Resources;

/**
 * Class Campfire
 * @package Basecamp\Resources
 */
class Campfire extends Resource
{

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->client->request('chats.js');
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @return mixed
     */
    public function get($projectId, $campfireId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $campfireId
     */
    public function getLines($projectId, $campfireId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/lines.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $lineId
     */
    public function getLine($projectId, $campfireId, $lineId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/lines/{$lineId}.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param string $content
     */
    public function createLine($projectId, $campfireId, $content = '')
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/lines.json";
        $options['body'] = json_encode(['content' => $content]);

        return $this->client->request('post', $endpoint, $options);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $lineId
     */
    public function deleteLine($projectId, $campfireId, $lineId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/lines/{$lineId}.json";
        return $this->client->request('delete', $endpoint);
    }
}