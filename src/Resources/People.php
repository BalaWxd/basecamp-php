<?php


namespace Basecamp\Resources;


class People extends Resource
{

    /**
     * Get all people visible to the current user.
     */
    public function getAll()
    {
        $this->client->request('get', '/people.json');
    }

    /**
     * Get people on a project
     *
     * @param $projectId
     */
    public function getByProject($projectId)
    {
        $endpoint = "/projects/{$projectId}/people.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * Get pingable people.
     *
     * Return all people on this Basecamp account who can be pinged.
     */
    public function getPinaglePeople()
    {
        return $this->client->request('get', '/circles/people.json');
    }

    /**
     * Get person.
     *
     * Will return the profile for the user with the given ID.
     *
     * @param $peopleId
     */
    public function get($peopleId)
    {
        $endpoint = "/people/{$peopleId}.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * Return the current user's personal info.
     */
    public function myProfile()
    {
        $this->client->request('get', '/my/profile.json');
    }
}