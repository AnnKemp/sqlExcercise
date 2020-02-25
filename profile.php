<?php

include("connection.php");
// -------------------------------------- this is en VIEW-page ------------------------------------------------------------
echo "<!DOCTYPE html>
<html>
<head>
<style>
section {
    margin-left: auto;
    margin-right:auto;
    text-align: center;
  font-family: arial, sans-serif;
  width: 50%;
  height: 80%;
  border:solid 1px grey;
  
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
<body>";
//<h1 href='profile.php?user=" . $row["id"]

try {
    foreach ($conn->query('SELECT * from student') as $row) {
        echo "<section><h1>" . $row["firstname"]." ".$row["lastname"] . "</h1><p>" . $row["email"] . "</p><em>" . $row["quote"] . "</em><br /><small>" . $row["quote_author"] . "</small></section>";
    }
    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "</body></html>";
?>