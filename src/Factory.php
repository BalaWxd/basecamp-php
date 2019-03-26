<?php


namespace Basecamp;


use Basecamp\Http\Client;

class Factory
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * Factory constructor.
     * @param array $config
     * @param null $client
     * @param array $clientOptions
     */
    public function __construct($config = [], $client = null, $clientOptions = [])
    {
        $this->client = $client ?: new Client($config, $client, $clientOptions);
    }

    /**
     * @param array $config
     * @param null $client
     * @param array $clientOptions
     * @return Factory
     */
    public static function create($config = [], $client = null, $clientOptions = [])
    {
        return new static($config, $client, $clientOptions);
    }

    /**
     * @param $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments = [])
    {
        $resource = 'Basecamp\\Resources\\' . ucfirst($name);

        return new $resource($this->client);
    }
}