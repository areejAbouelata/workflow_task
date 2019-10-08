<?php

return [
    'straight'   => [
        'type'          => 'workflow', // or 'state_machine'
        'marking_store' => [
            'type'      => 'multiple_state',
            'arguments' => ['currentPlace']
        ],
        'supports'      => ['App\JobRequest'],
        'places'        => ['pending', 'hrAccept', 'adminAccepted', 'rejected'],
        'transitions'   => [
            'to_hrAccept' => [
                'from' => 'pending',
                'to'   => 'hrAccept'
            ],
            'to_adminAccept' => [
                'from' => 'hrAccept',
                'to'   => 'adminAccepted'
            ],
            'reject' => [
                'from' => 'pending',
                'to'   => 'rejected'
            ],
            'admin_reject' => [
                'from' => 'hrAccept',
                'to'   => 'rejected'
            ]
        ],
    ]
];