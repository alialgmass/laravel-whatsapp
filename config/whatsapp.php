<?php

return [
    'default' => 'greenapi',

    'connections' => [
        'greenapi' => [
            'instance_id' => env('GREENAPI_INSTANCE_ID'),
            'token' => env('GREENAPI_TOKEN'),
        ],
    ],
];
