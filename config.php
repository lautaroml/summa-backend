<?php

return [
    'database' => [
        'name' => 'nombreDB',
        'username' => 'userDB',
        'password' => 'passwordDB',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
