<?php

return [
    'flight.controllers.path' => dirname(__DIR__).'/app/Controllers',
    'flight.models.path'      => dirname(__DIR__).'/app/Models',
    'flight.core.path'        => dirname(__DIR__).'/app/Core',
    'flight.log_errors'       => true,
    
    /**
     * default database config
     */
    'db.default' => [
        'host'    => env('DB_HOST', 'localhost'),
        'port'    => env('DB_PORT', 3306),
        'user'    => env('DB_USERNAME', 'root'),
        'pass'    => env('DB_PASSWORD', 'root'),
        'name'    => env('DB_DATABASE', 'better-flight'),
        'charset' => 'utf8',
    ],
    
    'cache.path' => dirname(__DIR__).'/storage/cache',
    'log.path'   => dirname(__DIR__).'/storage/logs',

];
