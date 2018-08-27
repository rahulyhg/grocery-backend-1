<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'dummy' => [],
        ],
    ],
    'zf-mvc-auth' => [
        'authentication' => [
            'map' => [
                'Status\\V1' => 'oauth2_doctrine',
                'Status\\V2' => 'oauth2_doctrine',
            ],
        ],
    ],
];
