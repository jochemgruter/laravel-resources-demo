<?php

return [

    'route' => '/',

    'middleware' => ['web'],

    'layout' => [

        'view' => 'layouts.app',

        'section' => 'resource'
    ],

    'index' => [
        'rows' => 25,

        'available' => [25, 50, 100, 250, 500]
    ]
];
