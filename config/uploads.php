<?php

return [
    'disks' => [
        'cloud' => [
            'public' => env('PUBLIC_UPLOAD_CLOUD_DISK'),
            'private' => env('PRIVATE_UPLOAD_CLOUD_DISK'),
        ],
        'local' => [
            'public' => env('PUBLIC_UPLOAD_LOCAL_DISK'),
            'private' => env('PRIVATE_UPLOAD_LOCAL_DISK'),
        ],
    ],

    'images' => [
        'scope' => 'images',
        'catalog' => 'images',
    ],

    'documents' => [
        'scope' => 'documents',
        'catalog' => 'documents',
    ],

    'avatars' => [
        'scope' => 'avatars',
        'catalog' => 'avatars',
    ],
];
