<?php
/**
 * @see https://github.com/basecamp/bc3-api/blob/master/sections/client_approvals.md#get-a-client-approval
 */

namespace Basecamp\Resources;

/**
 * Class ClientApproval
 * @package Basecamp\Resources
 */
class ClientApproval extends Resource
{

    /**
     * @param $projectId
     */
    public function getAll($projectId)
    {
        $endpoint = "/buckets/{$projectId}/client/approvals.json";
        return $this->client->request('get', $endpoint);
    }

    /**
     * @param $projectId
     * @param $clientApprovalId
     */
    public function get($projectId, $clientApprovalId)
    {
        $endpoint = "/buckets/{$projectId}/client/approvals/{$clientApprovalId}.json";
        return $this->client->request('get', $endpoint);
    }
}