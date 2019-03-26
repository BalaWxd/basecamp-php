<?php
/**
 * Implementation of Attachments.
 *
 * @see https://github.com/basecamp/bc3-api/blob/master/sections/attachments.md#attachments
 */

namespace Basecamp\Resources;

class Attachment extends Resource
{

    /**
     * @param $mimeType
     * @param $length
     * @param $name
     * @param $data
     */
    public function create($mimeType, $length, $name, $data)
    {
        $options = [
            'headers' => ['Content-Type' => $mimeType, 'Length' => $length],
            'body' => $data,
        ];

        return $this->client->request('post', "/attachments.json?name={$name}", $options);
    }
}