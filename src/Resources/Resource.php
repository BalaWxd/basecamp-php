<?php

namespace Basecamp\Resources;

use Basecamp\Http\Client as BasecampHttpClient;

abstract class Resource
{
    /**
     * @var BasecampHttpClient
     */
    protected $client;

    /**
     * Resource constructor.
     * @param BasecampHttpClient $client
     */
    public function __construct(BasecampHttpClient $client)
    {
        $this->client = $client;
    }
}