<?php

use App\Model\Merchant;

return [
    'defaults' => [
        'guard'     => 'api',
        'passwords' => 'merchant',
    ],

    'guards' => [
        'api' => [
            'driver'   => 'passport',
            'provider' => 'merchant',
        ],
    ],

    'providers' => [
        'merchant' => [
            'driver' => 'eloquent',
            'model'  => Merchant::class
        ],

        'member'    => [
            'driver' => 'eloquent',
            'model'  => \App\Model\Member::class
        ]
    ]
];
