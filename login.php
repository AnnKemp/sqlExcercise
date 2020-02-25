<?php
//require("Controller/isert.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="login">
    <meta name="author" content="Ann @becode">
    <title>Login page</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="text-center">
<form class="form-signin" action="auth.php" method="post">

    <img class="mb-0" src="assets/img/becode-4.png" alt="becode-4.png">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" name="user_email" required autofocus>
    <input type="password" id="inputPassword" name="password" class="form-control mb-3" placeholder="Password" required>
    <h3 class="h3 mb-0 font-weight-normal">Or register</h3>
    <a href="form.php" class="mb-3">register here</a>
    </div>
    <button class="btn btn-secondary mb-3 btn-block" type="submit" name="submit_2">sign in</button>

    <p class="mt-2 text-muted">&copy; 2020</p>
</form>
</body>
</html>

<?php

// this must be placed on the insert page
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