<?php
function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "DB_HOST";
    $dbuser    = "DB_USER";
    $dbpass    = "DB_USER_PASSWORD";
    $db        = "DB_NAME";


    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .'example.com'';dbname='. $db, $dbuser, $dbpass);
 
 // Why we do this here
 return $pdo;
}
