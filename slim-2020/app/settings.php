<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthtHeader' => false,


        'renderer'=> [
            'template_path' => __DIR__. '/../templates/',
        ],

        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        "db" => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'dbname' => 'sibaru',
            'driver' => 'mysql'
        ]
        ],
        ];