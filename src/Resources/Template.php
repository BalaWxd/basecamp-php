<?php


namespace Basecamp\Resources;


class Template extends Resource
{

    public function getAll()
    {
        return $this->client->request('get', '/templates.json');
    }

    public function get($templateId)
    {
        $endpoint = "/templates/{$templateId}.json";
        return $this->client->request('get', $endpoint);
    }
}