<?php
// check if validation is 'ok'
if($_POST['user_email']) {

    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    if ($user_email == 'admin@becode.be') {

        echo '<script language="javascript">document.getElementById("inputEmail").placeholder = 
            "right email!"; </script>';
        echo '<script language="javascript">document.getElementById("inputEmail").style.backgroundColor = "#DAF7A6"; </script>';

    } else {
        echo '<script language="javascript">document.getElementById("inputEmail").placeholder = 
            "wrong email!"; </script>';
        echo '<script language="javascript">document.getElementById("inputEmail").style.backgroundColor = "pink"; </script>';
    }
    if ($password == 'WachtWoord123') {

        echo '<script language="javascript">document.getElementById("inputPassword").placeholder = 
            "right email!"; </script>';
        echo '<script language="javascript">document.getElementById("inputPassword").style.backgroundColor = "#DAF7A6"; </script>';

    } else {
        echo '<script language="javascript">document.getElementById("inputPassword").placeholder = 
            "wrong password!"; </script>';
        echo '<script language="javascript">document.getElementById("inputPassword").style.backgroundColor = "pink"; </script>';
    }
    if(($user_email == 'admin@becode.be') && ($password == 'WachtWoord123')){
        header('Location: ../homepage.php/');
        //exit;
    }
}else{
    echo '<script language="javascript">document.getElementById("inputEmail").style.backgroundColor = "white"; </script>';
    echo '<script language="javascript">document.getElementById("inputPassword").style.backgroundColor = "white"; </script>';

}
require('login.php');
// login logic

// uit de tabel aflopen om te checken of deze email wachtwoord combinatie bestaat
// zo wél, toegang tot de site ,email en paswoord in de session steken voor de loop van het bezoek

// dus een aparte tabel maken voor de email en het wachtwoord of een wachtwoordveld toevoegen aan de bestaande
/*The login logic should:
Check if the filled in username / email can be found on a user with that credential
Check if the hashed database password, can be matched to the newly hashed (filled in) password
If not, go back to the login page, giving an error (WATCH OUT: never say whether the password or the username/email was incorrect, always say either one of them could be wrong)
If it's correct, move to the index.php page
Now, obviously we don't want non-logged-in people to see index.php with all our data, so protect index.php so that it checks for the user's login status and redirects to login.php when not logged in. */

// registration logic comes here with a session for the email and the password

//Check if password and password confirm are equal. Use password_verify for this.
// uit de sessies halen
/*
    if(password_verify($_POST["password"],$hashed_password))
    echo "Welcome";

    else
    echo "Wrong Password";

// $_POST["password"] ---> Is The User`s Input
// $hashed_password ---> Is The Hashed Password You Have Fetched From DataBase

}
<?php
$hashed_password = password_hash($_POST["password"],PASSWORD_DEFAULT);

// $_POST["password"] ---> Is The User`s Input
// $hashed_password ---> Is The Hashed Password You Can Store In Your DataBase

--------------------------------------------------------
--- When A User Wants To Sign Up ---
1 ---> Get Input From User Which Is The User`s Password
1 ---> Hash The Password
2 ---> Store The Hashed Password In Your DataBase
--------------------------------------------------------

$hash = '$1$toHVx1uW$KIvW9yGZZSU/1YOidHeqJ/';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

// Output: Password is valid!
If the registration fails, go back to the previous form, fill in all the previously filled in data (except the passwords) and show an error on the correct field
If the registration succeeds, go to profile.php and show the user's own profile.
?>
*/