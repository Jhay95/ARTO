<?php

//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);

// Assign the database parameters to PHP constants
define("DB_HOST", $cleardb_server);
define("DB_USER", $cleardb_username);
define("DB_PASS", $cleardb_password);
define("DB_NAME", $cleardb_db);


// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
// URL root
define("URL_ROOT", "http://localhost:8080/CMM007/ARTO/");
define("SITE_NAME", "ARTO-Blog");
define("PRIVATE_PATH", dirname(dirname(__FILE__)));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/Public/');
define("MODELS_PATH", PRIVATE_PATH . '/models/');
define("CONTROLLERS_PATH", PRIVATE_PATH . '/controllers/');
define("MODULES_PATH", PRIVATE_PATH . '/modules/');
define("VIEWS_PATH", PRIVATE_PATH . '/views/');
define("PAGES_PATH", VIEWS_PATH . '/pages/');
define("INC_PATH", VIEWS_PATH . '/includes/');
define( "HOMEPAGE_NUM_ARTICLES", 6);




