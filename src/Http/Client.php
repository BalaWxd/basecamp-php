<?php

namespace Basecamp\Http;

use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Client
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var array
     */
    protected $clientOptions;

    /**
     * Client constructor.
     * @param array $config
     * @param null $client
     * @param array $clientOptions
     */
    public function __construct($config = [], $client = null, $clientOptions = [])
    {
        if (! isset($config['account_id'], $config['app_name'], $config['app_contact'])) {
            throw new \InvalidArgumentException("Config must contain account_id, app_name and app_contact. See: https://github.com/basecamp/bc3-api (Identifying your application).");
        }

        $default = ['auth' => 'http', 'token' => null, 'username' => null, 'password' => null];

        $config = array_merge($default, $config);

        if ($config['auth'] === 'http') {
            if (! isset($config['username'], $config['password'])) {
                throw new \InvalidArgumentException("Config must contain username and password when using http auth");
            }
            $authorization = 'Basic ' . base64_encode($config['username'] . ':' . $config['password']);
        }
        if ($config['auth'] === 'oauth') {
            if (! isset($config['token'])) {
                throw new \InvalidArgumentException("Config must contain token when using oauth");
            }
            $authorization = sprintf('Bearer %s', $config['token']);
        }
        if (! isset($authorization)) {
            throw new \InvalidArgumentException("Config must contain valid authentication method");
        }

        $defaultClientOptions = [
            'base_uri' => "https://3.basecampapi.com/{$config['account_id']}/",
            'headers' => [
                'User-Agent' => sprintf('%s (%s)', $config['app_name'], $config['app_contact']),
                'Authorization' => $authorization,
            ]
        ];

        $this->clientOptions = array_merge($defaultClientOptions, $clientOptions);

        $this->client = $client ?: new GuzzleClient();
    }


    /**
     * @param $method
     * @param $url
     * @param array $options
     * @param null $query_string
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($method, $url, $options = [], $query_string = null)
    {
        $options = array_merge($this->clientOptions, $options);

        if ($query_string) {
            $url .= "?{$query_string}";
        }

        // Remove left slash if there is
        $url = ltrim($url, '/');

        try {
            return new Response($this->client->request($method, $url, $options));
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e) {
            throw new BadRequestHttpException(\GuzzleHttp\Psr7\str($e->getResponse()), $e, $e->getCode());
        } catch (\Exception $e) {
            throw new BadRequestHttpException($e->getMessage(), $e, $e->getCode());
        }

    }
}
