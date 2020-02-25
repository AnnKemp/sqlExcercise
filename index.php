<?php
include("connection.php");
// -------------------------------------- this is a VIEW-page ------------------------------------------------------------
echo "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body><table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Language</th>
    <th>Personal page</th>
  </tr>";

try {
    foreach($conn->query('SELECT * from student') as $row) {
        echo "<tr><td><a href='profile.php?user=".$row["id"]."'>". $row["firstname"]. "</a></td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["preferredlanguage"]. "</td><td>" . $row["linkedin"]. "</td></tr>";
    }
    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "</table></body></html>";


//$sql = "SELECT firstname, lastname, email, preferredlanguage, linkedin FROM student";
// kan nog niet want nog geen waarden in student
//$stmt = $db->prepare('SELECT * FROM student');
//$stmt->bindValue(PDO::PARAM_INT);
//$stmt->bindValue(PDO::PARAM_STR);
//$stmt->execute();




//$pdo = new PDO('mysql:host=localhost;dbname=becode', 'AnnKemp', 'AnnKemp_116', array(PDO::ATTR_PERSISTENT => true));

//$statement = $pdo->query("SELECT * FROM student");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['*']);
//echo "<ul>";
//foreach ($statement as $rij) {
// echo "<li>".$rij['firstname']." - ".$rij['lastname']."</li>";
//}
//echo "</ul>";