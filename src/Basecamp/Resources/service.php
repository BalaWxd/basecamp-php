<?php

return array(
    'serviceFullName' => '37signals Basecamp API',
    'serviceAbbreviation' => 'Basecamp3 API',
    'models' => array(
        'getResponse' => array(
            'type' => 'object',
            'additionalProperties' => array(
                'location' => 'json'
            ),
        ),
    ),
    'operations' => array(
        'createAttachment' => array(
            'httpMethod' => 'POST',
            'uri' => 'attachments.json?name={name}',
            'summary' => 'Create Attachment' . PHP_EOL . '[Basecamp API: Attachments](https://github.com/basecamp/bc3-api/blob/master/sections/attachments.md)',
            'parameters' => array(
                'mimeType' => array(
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                    'description' => 'The content type of the data',
                    'type' => 'string',
                    'required' => true,
                ),
                'length' => array(
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                    'description' => 'The content length of data',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'uri',
                    'description' => 'File name',
                    'type' => 'string',
                    'required' => true,
                ),
                'data' => array(
                    'location' => 'body',
                    'description' => 'The attachment\'s binary data',
                    'type' => 'any',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getCampfires' => array(
            'httpMethod' => 'GET',
            'uri' => 'chats.json',
            'summary' => 'Get Campfires' . PHP_EOL . '[Basecamp API: Get Campfires](https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#get-campfires)',
            'responseModel' => 'getResponse',
        ),
        'getCampfire' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/chats/{campfireId}.json',
            'summary' => 'Get a campfire' . PHP_EOL . '[Basecamp API: Get a Campfire](https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#get-a-campfire)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'campfireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getCampfireLines' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/chats/{campfireId}/lines.json',
            'summary' => 'Get campfire lines' . PHP_EOL . '[Basecamp API: Get Campfire lines](https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#get-campfire-lines)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'campfireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getCampfireLine' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/chats/{campfireId}/lines/{lineId}.json',
            'summary' => 'Get a Campfire line' . PHP_EOL . '[Basecamp API: Get a Campfire line](https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#get-a-campfire-line)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'campfireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'lineId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createCampfireLine' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/chats/{campfireId}/lines.json',
            'sumamry' => 'Create a Campfire line' . PHP_EOL . '[Basecamp API: Create a Campfire line](https://github.com/basecamp/bc3-api/blob/master/sections/campfires.md#create-a-campfire-line)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'campfireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'description' => 'Line content',
                    'type' => 'string',
                    'required' => true,
                ),
                'responseModel' => 'getResponse',
            ),
        ),
        'getClientApprovals' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/approvals.json',
            'summary' => 'Get client approvals' . PHP_EOL . '[Basecamp API: Get client approvals](https://github.com/basecamp/bc3-api/blob/master/sections/client_approvals.md#get-client-approvals)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getClientApproval' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/approvals/{approvalId}.json',
            'summary' => 'Get a client approval' . PHP_EOL . '[Basecamp API: Get a client approval](https://github.com/basecamp/bc3-api/blob/master/sections/client_approvals.md#get-a-client-approval)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'approvalId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getClientCorrespondences' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/correspondences.json',
            'summary' => 'Get client correspondences' . PHP_EOL . '[Basecamp API: Get client correspondences](https://github.com/basecamp/bc3-api/blob/master/sections/client_correspondences.md#get-client-correspondences)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getClientCorrespondence' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/correspondences/{correspondenceId}.json',
            'summary' => 'Get a client correspondence' . PHP_EOL . '[Basecamp API: Get a client correspondence](https://github.com/basecamp/bc3-api/blob/master/sections/client_correspondences.md#get-a-client-correspondence)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'correspondenceId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getClientReplies' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/recordings/{recordingId}/replies.json',
            'summary' => 'Get client replies' . PHP_EOL . '[Basecamp API: Get client replies](https://github.com/basecamp/bc3-api/blob/master/sections/client_replies.md#get-client-replies)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'recordingId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                )
            ),
            'responseModel' => 'getResponse',
        ),
        'getClientReply' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/client/recordings/{recordingId}/replies/{replyId}.json',
            'summary' => 'Get client replies' . PHP_EOL . '[Basecamp API: Get client replies](https://github.com/basecamp/bc3-api/blob/master/sections/client_replies.md#get-client-replies)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'recordingId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'replyId' => array(
                    'location' => 'uri',
                    'description' => 'Reply id',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getComments' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/recordings/{recordingId}/comments.json',
            'summary' => 'Get comments' . PHP_EOL . '[Basecamp API: Get comments](https://github.com/basecamp/bc3-api/blob/master/sections/comments.md#get-comments)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'recordingId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getComment' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/comments/{commentId}.json',
            'summary' => 'Get a comment' . PHP_EOL . '[Basecamp API: Get a comment](https://github.com/basecamp/bc3-api/blob/master/sections/comments.md#get-a-comment)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'commentId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createComment' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{bucketId}/recordings/{recordingId}/comments.json',
            'summary' => 'Create a comment' . PHP_EOL . '[Basecamp API: Create a comment](https://github.com/basecamp/bc3-api/blob/master/sections/comments.md#create-a-comment)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'recordingId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateComment' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/comments/{commentId}.json',
            'summary' => 'Update a comment' . PHP_EOL . '[Basecamp API: Update a comment](https://github.com/basecamp/bc3-api/blob/master/sections/comments.md#update-a-comment)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'commentId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getDocuments' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/vaults/{vaultId}/documents.json',
            'summary' => 'Get documents' . PHP_EOL . '[Basecamp API: Get documents](https://github.com/basecamp/bc3-api/blob/master/sections/documents.md#get-documents)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getDocument' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/documents/{documentId}.json',
            'summary' => 'Get a document' . PHP_EOL . '[Basecamp API: Get a document](https://github.com/basecamp/bc3-api/blob/master/sections/documents.md#get-a-document)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'documentId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createDocument' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/vaults/{vaultId}/documents.json',
            'summary' => 'Create a document' . PHP_EOL . '[Basecamp API: Create a document](https://github.com/basecamp/bc3-api/blob/master/sections/documents.md#create-a-document)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'title' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'status' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateDocument' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/documents/{documentId}.json',
            'summary' => 'Update a document' . PHP_EOL . '[Basecamp API: Update a document](https://github.com/basecamp/bc3-api/blob/master/sections/documents.md#update-a-document)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'title' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'status' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getEvents' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/recordings/{recordingId}/events.json',
            'summary' => 'Get events' . PHP_EOL . '[Basecamp API: Get events](https://github.com/basecamp/bc3-api/blob/master/sections/events.md#get-events)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'recordingId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getForwards' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/inboxes/{inboxId}/forwards.json',
            'summary' => 'Get forwards' . PHP_EOL . '[Basecamp API: Get forwards](https://github.com/basecamp/bc3-api/blob/master/sections/forwards.md#get-forwards)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'inboxId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getForward' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/inboxes/{inboxId}/forwards/{forwardId}.json',
            'summary' => 'Get a forward' . PHP_EOL . '[Basecamp API: Get a forward](https://github.com/basecamp/bc3-api/blob/master/sections/forwards.md#get-a-forward)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'inboxId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'forwardId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getInbox' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/inboxes/{inboxId}.json',
            'summary' => 'Get inbox' . PHP_EOL . '[Basecamp API: Get inbox](https://github.com/basecamp/bc3-api/blob/master/sections/inboxes.md#get-inbox)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'inboxId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getMessageBoard' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/message_boards/{messageBoardId}.json',
            'summary' => 'Get message board' . PHP_EOL . '[Basecamp API: Get message board](https://github.com/basecamp/bc3-api/blob/master/sections/message_boards.md#get-message-board)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'messageBoardId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getMessageTypes' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/categories.json',
            'summary' => 'Get message types' . PHP_EOL . '[Basecamp API: Get message types](https://github.com/basecamp/bc3-api/blob/master/sections/message_types.md#get-message-types)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getMessageType' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/categories/{categoryId}.json',
            'summary' => 'Get a message type' . PHP_EOL . '[Basecamp API: Get a message type](https://github.com/basecamp/bc3-api/blob/master/sections/message_types.md#get-a-message-type)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'categoryId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createMessageType' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/categories.json',
            'summary' => 'Create a message type' . PHP_EOL . '[Basecamp API: Create a message type](https://github.com/basecamp/bc3-api/blob/master/sections/message_types.md#create-a-message-type)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateMessageType' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/categories/{categoryId}.json',
            'summary' => 'Update a message type' . PHP_EOL . '[Basecamp API: Update a message type](https://github.com/basecamp/bc3-api/blob/master/sections/message_types.md#update-a-message-type)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'categoryId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'icon' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'destroyMessageType' => array(
            'httpMethod' => 'DELETE',
            'uri' => 'buckets/{projectId}/categories/{categoryId}.json',
            'summary' => 'Destroy a message type' . PHP_EOL . '[Basecamp API: Destroy a message type](https://github.com/basecamp/bc3-api/blob/master/sections/message_types.md#destroy-a-message-type)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'categoryId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getMessages' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/message_boards/{messageBoardId}/messages.json',
            'summary' => 'Get messages' . PHP_EOL . '[Basecamp API: Get messages](https://github.com/basecamp/bc3-api/blob/master/sections/messages.md#get-messages)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'messageBoardId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getMessage' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/messages/{messageId}.json',
            'summary' => 'Get a message' . PHP_EOL . '[Basecamp API: Get message](https://github.com/basecamp/bc3-api/blob/master/sections/messages.md#get-a-message)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'messageId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createMessage' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/message_boards/{messageBoardId}/messages.json',
            'summary' => 'Create a message' . PHP_EOL . '[Basecamp API: Create a message](https://github.com/basecamp/bc3-api/blob/master/sections/messages.md#create-a-message)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'messageBoardId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'subject' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'status' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'category_id' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateMesage' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/messages/{messageId}.json',
            'summary' => 'Update a message' . PHP_EOL . '[Basecamp API: Update a message](https://github.com/basecamp/bc3-api/blob/master/sections/messages.md#update-a-message)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'messageId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'subject' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'category_id' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getPeople' => array(
            'httpMethod' => 'GET',
            'uri' => 'people.json',
            'summary' => 'Get people' . PHP_EOL . '[Basecamp API: Get people](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#get-all-people)',
            'responseModel' => 'getResponse',
        ),
        'getPeopleOnProject' => array(
            'httpMethod' => 'GET',
            'uri' => 'projects/{projectId}/people.json',
            'summary' => 'Get people on project' . PHP_EOL . '[Basecamp API: Get people on project](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#get-people-on-a-project)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateProjectAccess' => array(
            'httpMethod' => 'PUT',
            'uri' => 'projects/{projectId}/people/users.json',
            'summary' => 'Update who can access a project' . PHP_EOL . '[Basecamp API: Update who can access a project](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#update-who-can-access-a-project)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'grant' => array(
                    'location' => 'json',
                    'description' => 'An array of people ids',
                    'type' => 'array',
                    'required' => false,
                ),
                'revoke' => array(
                    'location' => 'json',
                    'description' => 'An array of people IDs',
                    'type' => 'array',
                    'required' => false,
                ),
                'create' => array(
                    'location' => 'json',
                    'description' => 'An array of people IDs',
                    'type' => 'array',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getPingablePeople' => array(
            'httpMethod' => 'GET',
            'uri' => 'circles/people.json',
            'summary' => 'Get pingable people' . PHP_EOL . '[Basecamp API: Get pingable people](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#get-pingable-people)',
            'responseModel' => 'getResponse',
        ),
        'getPerson' => array(
            'httpMethod' => 'GET',
            'uri' => 'people/{personId}.json',
            'summary' => 'Get person' . PHP_EOL . '[Basecamp API: Get person](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#get-person)',
            'parameters' => array(
                'personId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'userInfo' => array(
            'httpMethod' => 'GET',
            'uri' => 'my/profile.json',
            'summary' => 'Get my personal info' . PHP_EOL . '[Basecamp API: Get my personal info](https://github.com/basecamp/bc3-api/blob/master/sections/people.md#get-my-personal-info)',
            'responseModel' => 'getResponse',
        ),
        'getProjects' => array(
            'httpMethod' => 'GET',
            'uri' => 'projects.json',
            'summary' => 'Get all projects' . PHP_EOL . '[Basecamp API: Get all projects](https://github.com/basecamp/bc3-api/blob/master/sections/projects.md#get-projects)',
            'responseModel' => 'getResponse',
        ),
        'getProject' => array(
            'httpMethod' => 'GET',
            'uri' => 'projects/{projectId}.json',
            'summary' => 'Get a project' . PHP_EOL . '[Basecamp API: Get a project](https://github.com/basecamp/bc3-api/blob/master/sections/projects.md#get-a-project)',
            'parameters' => array(
                'projectId' => array(
                    'locaiton' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
        ),
        'createProject' => array(
            'httpMethod' => 'POST',
            'uri' => 'projects.json',
            'summary' => 'Create a new project' . PHP_EOL . '[Basecamp API: Create a project](https://github.com/basecamp/bc3-api/blob/master/sections/projects.md#create-a-project)',
            'parameters' => array(
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true
                )
            ),
            'responseModel' => 'getResponse',
        ),
        'updateProject' => array(
            'httpMethod' => 'PUT',
            'uri' => 'projects/{projectId}.json',
            'summary' => 'Update a project' . PHP_EOL . '[Basecamp API: Update a project](https://github.com/basecamp/bc3-api/blob/master/sections/projects.md#update-a-project)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false
                )
            ),
            'responseModel' => 'getResponse',
        ),
        'getQuestionAnswers' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/questions/{questionId}/answers.json',
            'summary' => 'Get question answers' . PHP_EOL . '[Basecamp API: Get question answers](https://github.com/basecamp/bc3-api/blob/master/sections/question_answers.md#get-question-answers)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'questionId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getQuestionAnswer' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/question_answers/{answerId}.json',
            'summary' => 'Get a question answer' . PHP_EOL . '[Basecamp API: Get a question answer](https://github.com/basecamp/bc3-api/blob/master/sections/question_answers.md#get-a-question-answer)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'answerId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getQuestionnaire' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/questionnaires/{questionnaireId}.json',
            'summary' => 'Get questionnaire' . PHP_EOL . '[Basecamp API: Get questionnaire](https://github.com/basecamp/bc3-api/blob/master/sections/questionnaires.md#questionnaires)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'questionnaireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getQuestions' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/questionnaires/{questionnaireId}/questions.json',
            'summary' => 'Get questions' . PHP_EOL . '[Basecamp API: Get questions](https://github.com/basecamp/bc3-api/blob/master/sections/questions.md#get-questions)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'questionnaireId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getQuestion' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/questions/{questionId}.json',
            'summary' => 'Get a question' . PHP_EOL . '[Basecamp API: Get a question](https://github.com/basecamp/bc3-api/blob/master/sections/questions.md#get-a-question)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'questionId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getRecordings' => array(
            'httpMethod' => 'GET',
            'uri' => 'projects/recordings.json',
            'summary' => 'Get recordings' . PHP_EOL . '[Basecamp API: Get recordings](https://github.com/basecamp/bc3-api/blob/master/sections/recordings.md#get-recordings)',
            'responseModel' => 'getResponse',
        ),
        'getScheduleEntries' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/schedules/{scheduleId}/entries.json',
            'summary' => 'Get schedule entries' . PHP_EOL . '[Basecamp API: Get schedule entries](https://github.com/basecamp/bc3-api/blob/master/sections/schedule_entries.md#get-schedule-entries)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'scheduleId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getScheduleEntry' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/schedule_entries/{entryId}.json',
            'summary' => 'Get schedule entry' . PHP_EOL . '[Basecamp API: Get schedule entry](https://github.com/basecamp/bc3-api/blob/master/sections/schedule_entries.md#get-a-schedule-entry)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'entryId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createScheduleEntry' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/schedules/{scheduleId}/entries.json',
            'summary' => 'Create a schedule entry' . PHP_EOL . '[Basecamp API: Create a schedule entry](https://github.com/basecamp/bc3-api/blob/master/sections/schedule_entries.md#create-a-schedule-entry)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'scheduleId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'summary' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'starts_at' => array(
                    'location' => 'json',
                    'description' => 'timestamp for when this schedule entry begins',
                    'type' => 'string',
                    'required' => true,
                ),
                'ends_at' => array(
                    'location' => 'json',
                    'description' => 'timestamp for when this schedule entry begins',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'participant_ids ' => array(
                    'location' => 'json',
                    'description' => 'An array of people IDs that will participate in this entry. ',
                    'type' => 'array',
                    'required' => false,
                ),
                'all_day' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
                'notify' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateScheduleEntry' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/schedule_entries/{entryId}.json',
            'summary' => 'Update a schedule entry' . PHP_EOL . '[Basecamp API: Update a schedule entry](https://github.com/basecamp/bc3-api/blob/master/sections/schedule_entries.md#update-a-schedule-entry)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'entryId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'summary' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'starts_at' => array(
                    'location' => 'json',
                    'description' => 'timestamp for when this schedule entry begins',
                    'type' => 'string',
                    'required' => true,
                ),
                'ends_at' => array(
                    'location' => 'json',
                    'description' => 'timestamp for when this schedule entry begins',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'participant_ids ' => array(
                    'location' => 'json',
                    'description' => 'An array of people IDs that will participate in this entry. ',
                    'type' => 'array',
                    'required' => false,
                ),
                'all_day' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
                'notify' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getSchedule' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/schedules/{scheduleId}.json',
            'summary' => 'Get schedule' . PHP_EOL . '[Basecamp API: Get schedule](https://github.com/basecamp/bc3-api/blob/master/sections/schedules.md#get-schedule)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'scheduleId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTemplates' => array(
            'httpMethod' => 'GET',
            'uri' => 'templates.json',
            'summary' => 'Get templates' . PHP_EOL . '[Basecamp API: Get templates](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#get-templates)',
            'responseModel' => 'getResponse',
        ),
        'getTempate' => array(
            'httpMethod' => 'GET',
            'uri' => 'templates/{templateId}.json',
            'summary' => 'Get a template' . PHP_EOL . '[Basecamp API: Get a template](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#get-a-template)',
            'parameters' => array(
                'templateId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createTemplate' => array(
            'httpMethod' => 'POST',
            'uri' => 'templates.json',
            'summary' => 'Create a template' . PHP_EOL . '[Basecamp API: Create a template](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#create-a-template)',
            'parameters' => array(
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateTemplate' => array(
            'httpMethod' => 'PUT',
            'uri' => 'templates/{templateId}.json',
            'summary' => 'Update a template' . PHP_EOL . '[Basecamp API: Update a template](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#update-a-template)',
            'parameters' => array(
                'templateId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createProjectConstruction' => array(
            'httpMethod' => 'POST',
            'uri' => 'templates/{templateId}/project_constructions.json',
            'summary' => 'Create a project construction' . PHP_EOL . '[Basecamp API: Create a project construction](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#create-a-project-construction)',
            'parameters' => array(
                'templateId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'project' => array(
                    'location' => 'json',
                    'type' => array('object', 'array'),
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getProjectConstruction' => array(
            'httpMethod' => 'GET',
            'uri' => 'templates/{templateId}/project_constructions/{constructionId}.json',
            'summary' => 'Get a project construction' . PHP_EOL . '[Basecamp API: Get a project construction](https://github.com/basecamp/bc3-api/blob/master/sections/templates.md#create-a-project-construction)',
            'parameters' => array(
                'templateId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'constructionId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodoListGroups' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}/groups.json',
            'summary' => 'List to-do list groups' . PHP_EOL . '[Basecamp API: List to-do list groups](https://github.com/basecamp/bc3-api/blob/master/sections/todolist_groups.md#list-to-do-list-groups)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoListId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodoListGroup' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todolists/{groupId}.json',
            'summary' => 'Get a to-do list group' . PHP_EOL . '[Basecamp API: Get a to-do list group](https://github.com/basecamp/bc3-api/blob/master/sections/todolist_groups.md#get-a-to-do-list-group)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'groupId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createTodoListGroup' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}/groups.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoListId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'repositionTodoListGroup' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/todolists/groups/{groupId}/position.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'groupId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'position' => array(
                    'location' => 'json',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodoLists' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todosets/{todoSetId}/todolists.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoSetId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodoList' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoListId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createTodoList' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/todosets/{todoSetId}/todolists.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoSetId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateTodoList' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}.json',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoSetId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'name' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodos' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}/todos.json',
            'summary' => 'Get to-dos' . PHP_EOL . '[Basecamp API: Get to-dos](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#to-dos)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoListId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'status' => array(
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => false,
                ),
                'completed' => array(
                    'location' => 'uri',
                    'type' => 'boolean',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodo' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todos/{todoId}.json',
            'summary' => 'Get a to-do' . PHP_EOL . '[Basecamp API: Get a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#get-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createTodo' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/todolists/{todoListId}/todos.json',
            'summary' => 'Create a to-do' . PHP_EOL . '[Basecamp API: Create a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#create-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoListId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'assignee_ids' => array(
                    'location' => 'json',
                    'type' => 'array',
                    'description' => 'An array of people that will be assigned to this to-do',
                    'required' => false,
                ),
                'notify' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
                'due_on' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'description' => 'a date when the to-do should be completed',
                    'required' => false,
                ),
                'starts_on' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'description' => 'Allows the to-do to run from this date to the due_on date.',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateTodo' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/todos/{todoId}.json',
            'summary' => 'Update a to-do' . PHP_EOL . '[Basecamp API: Update a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#update-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'content' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => true,
                ),
                'description' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'required' => false,
                ),
                'assignee_ids' => array(
                    'location' => 'json',
                    'type' => 'array',
                    'description' => 'An array of people that will be assigned to this to-do',
                    'required' => false,
                ),
                'notify' => array(
                    'location' => 'json',
                    'type' => 'boolean',
                    'required' => false,
                ),
                'due_on' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'description' => 'a date when the to-do should be completed',
                    'required' => false,
                ),
                'starts_on' => array(
                    'location' => 'json',
                    'type' => 'string',
                    'description' => 'Allows the to-do to run from this date to the due_on date.',
                    'required' => false,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'completeTodo' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/todos/{todoId}/completion.json',
            'summary' => 'Complete a to-do' . PHP_EOL . '[Basecamp API: Complete a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#complete-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'uncompleteTodo' => array(
            'httpMethod' => 'DELETE',
            'uri' => 'buckets/{projectId}/todos/{todoId}/completion.json',
            'summary' => 'Uncomplete a to-do' . PHP_EOL . '[Basecamp API: Uncomplete a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#uncomplete-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'repositionTodo' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/todos/{todoId}/position.json',
            'summary' => 'Reposition a to-do' . PHP_EOL . '[Basecamp API: Reposition a to-do](https://github.com/basecamp/bc3-api/blob/master/sections/todos.md#uncomplete-a-to-do)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'position' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getTodoSet' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/todosets/{todoSetId}.json',
            'summary' => 'Get to-do set' . PHP_EOL . '[Basecamp API: Get to-do set](https://github.com/basecamp/bc3-api/blob/master/sections/todosets.md#get-to-do-set)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'todoSetId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getUploads' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}/uploads.json',
            'summary' => 'Get uploads' . PHP_EOL . '[Basecamp API: Get uploads](https://github.com/basecamp/bc3-api/blob/master/sections/uploads.md#get-uploads)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getUpload' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/uploads/{uploadsId}/uploads.json',
            'summary' => 'Get an upload' . PHP_EOL . '[Basecamp API: Get an upload](https://github.com/basecamp/bc3-api/blob/master/sections/uploads.md#get-an-upload)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'uploadsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createUpload' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}/uploads.json',
            'summary' => 'Create an upload' . PHP_EOL . '[Basecamp API: Create an upload](https://github.com/basecamp/bc3-api/blob/master/sections/uploads.md#create-an-upload)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateUpload' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/uploads/{uploadsId}.json',
            'summary' => 'Update an upload' . PHP_EOL . '[Basecamp API: Update an upload](https://github.com/basecamp/bc3-api/blob/master/sections/uploads.md#update-an-upload)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'uploadsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getVaults' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}/vaults.json',
            'summary' => 'Get vaults' . PHP_EOL . '[Basecamp API: Get vaults](https://github.com/basecamp/bc3-api/blob/master/sections/vaults.md#get-vaults)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'getVault' => array(
            'httpMethod' => 'GET',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}.json',
            'summary' => 'Get a vault' . PHP_EOL . '[Basecamp API: Get a vault](https://github.com/basecamp/bc3-api/blob/master/sections/vaults.md#get-a-vault)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'createVault' => array(
            'httpMethod' => 'POST',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}/vaults.json',
            'summary' => 'Create a vault' . PHP_EOL . '[Basecamp API: Create a vault](https://github.com/basecamp/bc3-api/blob/master/sections/vaults.md#create-a-vault)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
        'updateVault' => array(
            'httpMethod' => 'PUT',
            'uri' => 'buckets/{projectId}/vaults/{vaultsId}.json',
            'summary' => 'Update a vault' . PHP_EOL . '[Basecamp API: Update a vault](https://github.com/basecamp/bc3-api/blob/master/sections/vaults.md#update-a-vault)',
            'parameters' => array(
                'projectId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
                'vaultsId' => array(
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ),
            ),
            'responseModel' => 'getResponse',
        ),
    )
);
