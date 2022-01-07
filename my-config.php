<?php

define('MAX_UPLOAD_HUMAN', 3);
define('MAX_UPLOAD_MACHINE', 3*1024**2);


define('LOGIN', array('index.php'));
define('NO_LOGIN', array('dashboard.php', 'gallery.php'));


define('ALLOWED_TYPE_IMG', array('image/png', 'image/jpeg', 'image/tiff', 'image/gif', 'image/bmp'));


/* Mot de passe pour tous les utilisateurs : "user" */
$users = [
    'user1' => [
        'login' => 'user1',
        'password'   => '$2a$12$acd35PZ.GcLcltzMzDVo.uXjIudFFzKOAgjLsB1jMsZG2A6iUeq0G',
        'formule' => 'S',
        'quota' => 5
    ],
    'user2' => [
        'login' => 'user2',
        'password'   => '$2a$12$acd35PZ.GcLcltzMzDVo.uXjIudFFzKOAgjLsB1jMsZG2A6iUeq0G',
        'formule' => 'L',
        'quota' => 10
    ],
    'user3' => [
        'login' => 'user3',
        'password'   => '$2a$12$acd35PZ.GcLcltzMzDVo.uXjIudFFzKOAgjLsB1jMsZG2A6iUeq0G',
        'formule' => 'XL',
        'quota' => 20
    ]
]
?>