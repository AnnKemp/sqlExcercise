<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


include("Model/Database.php");

$conn = null;


//$sql = "SELECT firstname, lastname, email, preferredlanguage, linkedin FROM student";
// kan nog niet want nog geen waarden in student
//$stmt = $db->prepare('SELECT * FROM student');
//$stmt->bindValue(PDO::PARAM_INT);
//$stmt->bindValue(PDO::PARAM_STR);
//$stmt->execute();

//$statement = $pdo->query("SELECT * FROM student");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['*']);
//echo "<ul>";
//foreach ($statement as $rij) {
// echo "<li>".$rij['firstname']." - ".$rij['lastname']."</li>";
//}
//echo "</ul>";

?>