<?php

/**
 * Bootstrapping application
 */

require __DIR__ . '/../bootstrap/app.php';

//Flight::before('start', ['bootstrap']);

Flight::start();
