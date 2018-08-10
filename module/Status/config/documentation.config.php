<?php
return [
    'Status\\V1\\Rpc\\Ping\\Controller' => [
        'description' => 'Ping the API',
        'GET' => [
            'description' => 'Ping the API for acknowledgement',
            'response' => '{
   "ack": "Acknowledge the request with a timestamp"
}',
        ],
    ],
];
