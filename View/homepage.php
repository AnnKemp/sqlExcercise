<?php require 'header.php'?>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Language</th>
        <th>Personal page</th>
    </tr>
    <?php
    foreach($user as $row) {
        echo "<tr><td><a href='profile.php?user=" . $row["id"] . "'>" . $row["firstname"] . "</a></td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["preferredlanguage"] . "</td><td>" . $row["linkedin"] . "</td></tr>";
    }
    ?>
</table>
<?php require 'form.php'?>
<?php require 'footer.php'?>
</body>
</html>
