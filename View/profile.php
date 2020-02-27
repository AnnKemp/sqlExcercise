<!DOCTYPE html>
<html>
<head>
<style>
section {
    margin-left: auto;
    margin-right:auto;
    margin-top:40px;
    padding-top: 300px;
    text-align: center;
    font-family: arial, sans-serif;
    width: 25%;
    height: 200px;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-image:url('assets/img/woods.jpg');
  background-repeat: no-repeat;
  background-position: top;
}
h1 {
  margin-top:0;
}
</style>
</head>
<body>";
<?php
foreach ($userprofile as $row) {
            echo "<section><h1>" . $row["firstname"]." ".$row["lastname"] . "</h1><p>" . $row["email"] . "</p><em>" . $row["quote"] . "</em><br /><small>" . $row["quote_author"] . "</small></section>";
}
?>
</body>
</html>
