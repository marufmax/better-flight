<?php

/**
 * Bootstrapping application
 */

require __DIR__ . '/../bootstrap/init.php';

Flight::before('start', ['bootstrap']);

Flight::start();
