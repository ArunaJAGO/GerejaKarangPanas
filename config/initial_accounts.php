<?php

return [
    [
        'name' => 'Superadmin 1',
        'email' => env('SUPERADMIN_1_EMAIL', 'superadmin1@example.com'),
        'password' => env('SUPERADMIN_1_PASSWORD'),
        'role' => 'superadmin',
    ],
    [
        'name' => 'Superadmin 2',
        'email' => env('SUPERADMIN_2_EMAIL', 'superadmin2@example.com'),
        'password' => env('SUPERADMIN_2_PASSWORD'),
        'role' => 'superadmin',
    ],
    [
        'name' => 'Admin 1',
        'email' => env('ADMIN_1_EMAIL', 'admin1@example.com'),
        'password' => env('ADMIN_1_PASSWORD'),
        'role' => 'admin',
    ],
    [
        'name' => 'Admin 2',
        'email' => env('ADMIN_2_EMAIL', 'admin2@example.com'),
        'password' => env('ADMIN_2_PASSWORD'),
        'role' => 'admin',
    ],
];
