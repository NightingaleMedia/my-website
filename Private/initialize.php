<?php
ob_start();
// 
session_start(); //turns on sessions
// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/Site');
define("SHARED_PATH", PRIVATE_PATH . '/Shared');

require_once('functions.php');
require_once('database.php');
require_once('queryFunctions.php');
require_once('validation_functions.php');
require_once('auth_functions.php');
// $db = dbConnect();
// $errors = [];


// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
//define("WWW_ROOT", 'globe_bank/public');
// define("WWW_ROOT", 'www.albertsigman.com');
// * Can dynamically find everything in URL up to "/public"
 $public_end = strpos($_SERVER['SCRIPT_NAME'], '/Site') + 6;
 $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
//NOT SURE WHY THIS WORKED
 $my_site = "http://www.albertsigman.com";
 define("WWW_ROOT", $my_site);



?>
