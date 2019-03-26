<?php


namespace Basecamp\Resources;


class Message extends Resource
{

    public function getAll($projectId, $messageBoardId)
    {
        $endpoint = "/buckets/{$projectId}/message_boards/{$messageBoardId}/messages.json";
        return $this->client->request('get', $endpoint);
    }

    public function get($projectId, $messageId)
    {
        $endpoint = "/buckets/{$projectId}/messages/{$messageId}.json";
        return $this->client->request('get', $endpoint);
    }

    public function create($projectId, $messageBoardId, $subject, $content, $status = 'active')
    {
        $endpoint = "/buckets/1/message_boards/3/messages.json";

        $options['body'] = json_encode([
            'subject' => $subject,
            'content' => $content,
            'status' => $status,
        ]);
        return $this->client->request('post', $endpoint, $options);
    }

    public function update($projectId, $messageId, $subject, $content)
    {
        $endpoint = "/buckets/1/messages/2.json";
        $options['body'] = json_encode([
            'subject' => $subject,
            'content' => $content,
        ]);
        return $this->client->request('put', $endpoint, $options);
    }
}