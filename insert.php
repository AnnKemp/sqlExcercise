<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("connection.php");

try {
    $sql = $conn->prepare("INSERT INTO student (firstname, lastname, username, linkedin, github, email, preferredlanguage, avatar, video, quote, quote_author) VALUES (:firstname, :lastname, :username, :linkedin, :github, :email, :preferredlanguage, :avatar, :video, :quote, :quote_author)");
    $sql->bindParam(':firstname', $firstname);
    $sql->bindParam(':lastname', $lastname);
    $sql->bindParam(':username', $username);
    $sql->bindParam(':linkedin', $linkedin);
    $sql->bindParam(':github', $github);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':preferredlanguage', $lang);
    $sql->bindParam(':avatar', $avatar);
    $sql->bindParam(':video', $video);
    $sql->bindParam(':quote', $quote);
    $sql->bindParam(':quote_author', $quote_author);

    // insert a row
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $lang = $_POST['lang'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];
    $avatar=$_POST['fileToUpload'];
    $sql->execute();

    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


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
?>