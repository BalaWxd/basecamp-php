<?php


namespace Basecamp\Resources;


class ClientVisibility extends Resource
{

    /**
     * @param $projectId
     * @param $recordingId
     */
    public function toggle($projectId, $recordingId, $visibilityToClients)
    {
        $endpoint = "/buckets/{$projectId}/recordings/{$recordingId}/client_visibility.json";
        $options['body'] = json_encode(['visibility_to_clients' => $visibilityToClients]);
        return $this->client->request('put', $endpoint, $options);
    }
}