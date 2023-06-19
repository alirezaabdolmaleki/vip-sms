<?php

return [


    'default' => env('SMS_DRIVER', 'raygan_sms'),

    'drivers' => [
        'mediana' => [
            'username' => env('SMS_USERNAME', 'username'),
            'password' => env('SMS_PASSWORD', 'password'),
            'sender_number' => env('SMS_SENDER_NUMBER', 'sender number'),
        ],

        'raygan_sms' => [
            'username' => env('SMS_USERNAME', 'username'),
            'password' => env('SMS_PASSWORD', 'password'),
            'sender_number' => env('SMS_SENDER_NUMBER', 'sender number'),
        ]
    ]
];
