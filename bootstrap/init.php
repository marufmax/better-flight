<?php

/** 
 * Configuration for bootstrapping application
 *
 * 
 */


define('START_TIME', microtime());
define('APP_PATH', __DIR__.'/../app');

require __DIR__.'/../vendor/autoload.php';

//Load Dotenv
$dotenv = new \Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();
