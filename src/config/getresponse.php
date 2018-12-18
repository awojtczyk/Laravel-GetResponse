<?php
return [
    /*
     * Api Information
     */
    'apiKey' => env('GETRESP_API_KEY', 'null'),
    'apiUrl' => env('GETRESP_API_URL', 'https://api.getresponse.com/v3'),
    'timeout' => 8,

    'lists' => [
        'default' => [
            'id' => null
        ],
    ],
];
