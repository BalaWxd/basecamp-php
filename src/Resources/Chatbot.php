<?php
/**
 * @see https://github.com/basecamp/bc3-api/blob/master/sections/chatbots.md#chatbots
 */

namespace Basecamp\Resources;

/**
 * Class Chatbot
 * @package Basecamp\Resources
 */
class Chatbot extends Resource
{

    /**
     * @param $projectId
     * @param $campfireId
     */
    public function getAll($projectId, $campfireId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/integrations.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $chatbotId
     */
    public function get($projectId, $campfireId, $chatbotId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/integrations/{$chatbotId}.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $serviceName
     * @param null $commandUrl
     */
    public function create($projectId, $campfireId, $serviceName, $commandUrl = null)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/integrations.json";

        $data['service_naem'] = $serviceName;
        if ($commandUrl) {
            $data['command_url'] = $commandUrl;
        }
        $options['body'] = json_encode($data);

        return $this->client->request('post', $endpoint, $options);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $chatbotId
     * @param $serviceName
     * @param null $commandUrl
     */
    public function update($projectId, $campfireId, $chatbotId, $serviceName, $commandUrl = null)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/integrations/{$chatbotId}.json";

        $data['service_naem'] = $serviceName;
        if ($commandUrl) {
            $data['command_url'] = $commandUrl;
        }
        $options['body'] = json_encode($data);

        return $this->client->request('put', $endpoint, $options);
    }

    /**
     * @param $projectId
     * @param $campfireId
     * @param $chatbotId
     */
    public function destroy($projectId, $campfireId, $chatbotId)
    {
        $endpoint = "/buckets/{$projectId}/chats/{$campfireId}/integrations/{$chatbotId}.json";
        return $this->client->request('delete', $endpoint);
    }

    /**
     * @param $projectIid
     * @param $chatbotKey
     * @param $campfireId
     */
    public function createLine($projectIid, $chatbotKey, $campfireId, $content)
    {
        $endpoint = "/integrations/{$chatbotKey}/buckets/{$projectIid}/chats/{$campfireId}/lines.json";
        $options['body'] = json_encode(['content' => $content]);
        return $this->client->request('post', $endpoint);
    }
}