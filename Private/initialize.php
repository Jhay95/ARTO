<?php
// Load Config
require_once('config/config.php');
require_once('libs/redirect.php');
require_once('libs/session.php');
require_once('libs/slug.php');
// Load Modules
spl_autoload_register(function ($className) {
    require_once('modules/' . $className . '.php');
});

