<?php


namespace Basecamp\Resources;


class Document extends Resource
{

    public function getAll($projectId, $vaultId)
    {
        $endpoint = "/buckets/{$projectId}/vaults/{$vaultId}/documents.json";
        return $this->client->request('get', $endpoint);
    }

    public function get($projectId, $documentId)
    {
        $endpoint = "/buckets/{$projectId}/documents/{$documentId}.json";
        return $this->client->request('get', $endpoint);
    }

    public function create($projectId, $vaultId, $title, $content, $status = 'active')
    {
        $endpoint = "/buckets/{$projectId}/vaults/{$vaultId}/documents.json";
        $options['body'] = json_encode([
            'title' => $title,
            'content'=> $content,
            'status' => $status,
        ]);
        $this->client->request('post', $endpoint, $options);
    }

    public function update($projectId, $documentId, $title, $content, $status = 'active')
    {
        $endpoint = "/buckets/{$projectId}/documents/{$documentId}.json";
        $options['body'] = json_encode([
            'title' => $title,
            'content' => $content,
            'status' => $status,
        ]);
        return $this->client->request('put', $endpoint, $options);
    }
}