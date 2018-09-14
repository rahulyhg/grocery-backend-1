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
                'DbAPI\\V1' => 'oauth2_doctrine',
            ],
        ],
    ],
];
