<?php


namespace Basecamp\Resources;


class ClientCorrespondence extends Resource
{

    /**
     * @param $projectId
     */
    public function getAll($projectId)
    {
        $endpoint = "/buckets/{$projectId}/client/correspondences.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $correspondenceId
     */
    public function get($projectId, $correspondenceId)
    {
        $endpoint = "/buckets/{$projectId}/client/correspondences/{$correspondenceId}.json";
        $this->client->request('get', $endpoint);
    }
}