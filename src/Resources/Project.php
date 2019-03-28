<?php


namespace Basecamp\Resources;


class Project extends Resource
{

    /**
     * @param string $status
     *  archived, trashed or leave empty to get all.
     *
     * @return
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAll($status = '')
    {
        $endpoint = "/projects.json";
        if ($status) {
            $endpoint .= "?status={$status}";
        }
        return $this->client->request('get', $endpoint);
    }


    public function get($projectId)
    {
        $endpoint = "/projects/{$projectId}.json";
        return $this->client->request('get', $endpoint);
    }

    public function create($name, $description)
    {
        $options['body'] = json_encode([
            'name' => $name,
            'description' => $description,
        ]);

        return $this->client->request('post', '/projects.json', $options);
    }

    public function update($projectId, $name, $description)
    {
        $endpoint = "/projects/{$projectId}.json";

        $options['body'] = json_encode([
            'name' => $name,
            'description' => $description,
        ]);

        return $this->client->request('post', $endpoint, $options);
    }

    public function delete($projectId)
    {
        $endpoint = "/projects/{$projectId}.json";
        return $this->client->request('delete', $endpoint);
    }
}