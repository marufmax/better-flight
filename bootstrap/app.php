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
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

//Flight::set(require __DIR__ . '/../config/app.php');
require_once __DIR__  . '/../routes/routes.php';

// Controllers
Flight::path(Flight::get('flight.controllers.path'));

// Models
Flight::path(Flight::get('flight.models.path'));

// Core
Flight::path(Flight::get('flight.core.path'));

// Routes 
