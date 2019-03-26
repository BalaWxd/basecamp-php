<?php


namespace Basecamp\Resources;


class MessageType extends Resource
{

    public function getAll($projectId)
    {
        $endpoint = "/buckets/{$projectId}/categories.json";
        return $this->client->request('get', $endpoint);
    }

    public function get($projectId, $categoryId)
    {
        $endpoint = "/buckets/{$projectId}/categories/{$categoryId}.json";
        return $this->client->request('get', $endpoint);
    }

    public function create($projectId, $name, $icon)
    {
        $endpoint = "/buckets/{$projectId}/categories.json";
        $options['body'] = json_encode([
            'name' => $name,
            'icon' => $icon,
        ]);
        $this->client->request('post', $endpoint, $options);
    }

    public function update($projectId, $categoryId, $name, $icon)
    {
        $endpoint = "/buckets/{$projectId}/categories/{$categoryId}.json";
        $options['body'] = json_encode([
            'name' => $name,
            'icon' => $icon,
        ]);
        $this->client->request('put', $endpoint, $options);
    }

    public function destroy($projectId, $categoryId)
    {
        $endpoint = "/buckets/{$projectId}/categories/{$categoryId}.json";
        $this->client->request('delete', $endpoint);
    }
}