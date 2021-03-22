<?php

/**
 * This file is required in Public/index.php.
 * It includes all the helper files in /libs and config/ and classes in modules/
 */


// Load in Config file
require_once('config/config.php');

// Load in Helper files in /libs
require_once('libs/session.php');
require_once('libs/slug.php');

// Load in Modules
spl_autoload_register(function ($className) {
    require_once('modules/' . $className . '.php');
});

