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
define('DB_HOST', 'localhost');
define('DB_USER', 'AnnKemp');
define('DB_PASS', 'AnnKemp_116');
define('DB_NAME', 'becode');
try {
    $db = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    showDbError('connect', $e->getMessage());
}
// kan nog niet want nog geen waarden in student
$stmt = $db->prepare('SELECT * FROM student');
//$stmt->bindValue(':id', 2, PDO::PARAM_INT);
//$stmt->bindValue(':name', 'russia', PDO::PARAM_STR);
$stmt->execute();
echo "ok";
//$pdo = new PDO('mysql:host=localhost;dbname=becode', 'AnnKemp', 'AnnKemp_116', array(
 //   PDO::ATTR_PERSISTENT => true));

//$statement = $pdo->query("SELECT * FROM student");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['*']);
//echo "<ul>";
//foreach ($statement as $rij) {
   // echo "<li>".$rij['firstname']." - ".$rij['lastname']."</li>";
//}
//echo "</ul>";

