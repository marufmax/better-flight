<?php

return [
    'flight.controllers.path' => dirname(__DIR__).'/app/Controllers',
    'flight.models.path'      => dirname(__DIR__).'/app/Models',
    'flight.routes.path'      => dirname(__DIR__).'./routes/',
    'flight.core.path'        => dirname(__DIR__).'/app/Core',
    'flight.log_errors'       => true,
    
    /**
     * default database config
     */
    'db.default' => [
        'host'    => getenv('DB_HOST', 'localhost'),
        'port'    => getenv('DB_PORT', 3306),
        'user'    => getenv('DB_USERNAME', 'root'),
        'pass'    => getenv('DB_PASSWORD', 'root'),
        'name'    => getenv('DB_DATABASE', 'better-flight'),
        'charset' => 'utf8',
    ],
    
    'cache.path' => dirname(__DIR__).'/storage/cache',
    'log.path'   => dirname(__DIR__).'/storage/logs',

];
