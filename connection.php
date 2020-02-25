<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/*
function openConnection() {
    // Try to figure out what these should be for you
    if (!defined('DB_HOST')) define('DB_HOST','AnnKemp@localhost');
    if (!defined('DB_USER')) define('DB_USER','AnnKemp');
    if (!defined('DB_PASS')) define('DB_PASS','AnnKemp_116');
    if (!defined('DB_NAME')) define('DB_NAME','becode');

    $dbhost    = "DB_HOST";
    $dbuser    = "DB_USER";
    $dbpass    = "DB_USER_PASSWORD";
    $db        = "DB_NAME";

    $dbh = new PDO('mysql:
    host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, array(
        PDO::ATTR_PERSISTENT => true
    ));
    return $dbh;
}

openConnection();*/
include("functions.php");

// Database config
if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'AnnKemp');
if (!defined('DB_PASS')) define('DB_PASS', 'AnnKemp_116');
if (!defined('DB_NAME')) define('DB_NAME', 'becode');
try {
    $conn = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS,array(PDO::ATTR_PERSISTENT => true));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    showDbError('connect', $e->getMessage());
}


 //echo "ok";  // test if the stuff above is working