<?php
use \Defuse\Crypto\Key;
$config = [
    'host' => 'localhost',
    'db_name' => 'e_invoicing',
    'username' => 'root',
    'password' => 'localhost',
    'cryptoKey' => implode(
        [
        'def0000057b1b0528f59f7ba3da8a25f60e9498bb0060',
        'a652843681d9f8ca53746679318aab2e54a9d4c2485f4',
        '6441709de9f0c4aa494dc31acf3d64484f88089296ebe6'
        ]
    )
];
$db = new \mysqli(
    $config['host'], 
    $config['username'], 
    $config['password'], 
    $config['db_name']
);
$container = [
    'cryptoKey' => Key::loadFromAsciiSafeString($config['cryptoKey']),
    'db' => $db
];
return $container;