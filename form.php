<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <style>
        .error{
            color:red;
        }
        footer {
            text-align: center;
        }
        .textAbove{
            margin-left:14%;
        }
    </style>

    <title>Fill database</title>
</head>
<body>
<div class="container">
    <h1>Fill database</h1>
    <!-- dit hieronder nog even testen -->
    <form method="post" action="insert.php" enctype="multipart/form-data" >

        <fieldset>
            <legend>Data</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First name:</label>
                    <!-- https://www.w3schools.com/php/php_form_complete.asp -->
                    <input type="text" name="firstname" id="firstname" class="form-control" required value="<?php echo $firstname;?>" >
                    <span class="error"> <?php echo $streetErr; ?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">last name:</label>
                    <input type="text" id=lastname" name="lastname" class="form-control" required value="<?php echo $lastname;?>">
                    <span class="error"> <?php echo $streetnrErr; ?></span>
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required value="<?php echo $username;?>">
                        <span class="error"> <?php echo $zipcodeErr; ?></span>
                    </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="github">Github:</label>
                    <input type="text" id="github" name="github" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control" required value="<?php echo $city;?>">
                    <span class="error"> <?php echo $cityErr; ?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lang">Prefered language:</label>
                    <input type="text" id="lang" name="lang" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lang">Video link:</label>
                    <input type="text" id="video" name="video" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="github">Quote:</label>
                    <input type="text" id="quote" name="quote" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="quote_author">Author quote:</label>
                    <input type="text" id="quote_author" name="quote_author" class="form-control" required value="<?php echo $email; ?>" />
                    <span class="error"> <?php echo $emailErr; ?></span>
                </div>
            </div>
            <input type="text" name="fileToUpload" required id="fileToUpload">
        </fieldset>
        <p>
        <button type="submit" class="btn btn-primary">SEND</button>
        </p>
    </form>
    <footer>Fuck off! You already ordered food and drinks.</footer>
</div>
</body>
</html>
