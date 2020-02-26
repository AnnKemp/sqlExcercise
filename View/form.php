<div class="container">
    <h1>Register</h1>
    <!-- moet normaal naar register.php maar ik stuur het nu naar de controller -->
    <form method="post" action="../index.php" enctype="multipart/form-data" >

        <fieldset>
            <legend> </legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First name:</label>
                    <!-- https://www.w3schools.com/php/php_form_complete.asp -->
                    <input type="text" name="firstname" id="firstname" class="form-control" required value="">
                    <!-- <span class="error"> <?php //echo $streetErr; ?></span> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last name:</label>
                    <input type="text" id=lastname" name="lastname" class="form-control" required value="<?php //echo $lastname;?>">
                    <!-- <span class="error"> <?php //echo $streetnrErr; ?></span> -->
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required value="<?php //echo $username;?>">
                        <!-- <span class="error"> <?php //echo $zipcodeErr; ?></span> -->
                    </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" required value="<?php //echo $email; ?>" />
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="github">Github:</label>
                    <input type="text" id="github" name="github" class="form-control" required value="<?php //echo $email; ?>" />
                   <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>

                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control" required value="<?php //echo $city;?>">
                    <!-- <span class="error"> <?php //echo $cityErr; ?></span> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lang">Prefered language:</label>
                    <input type="text" id="lang" name="lang" class="form-control" required value="<?php //echo $email; ?>" />
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="lang">Video link:</label>
                    <input type="text" id="video" name="video" class="form-control" required value="<?php //echo $email; ?>" />
                    <!-- <span class="error"> <?php echo $emailErr; ?></span> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="github">Quote:</label>
                    <input type="text" id="quote" name="quote" class="form-control" required value="<?php //echo $email; ?>" />
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="quote_author">Author quote:</label>
                    <input type="text" id="quote_author" name="quote_author" class="form-control" required value="<?php //echo $email; ?>" />
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fileupload">Avatar link:</label>
                     <input type="text" id="fileupload" name="fileToUpload" required class="form-control" >
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
            </div>
            </div>
               <h1>Your password here :</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password :</label>
                    <input type="text" id="password" name="password" class="form-control" >
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Repeat password :</label>
                    <input type="text" id="password_confirm" name="password_confirm" class="form-control" >
                    <!-- <span class="error"> <?php //echo $emailErr; ?></span> -->
                </div>
            </div>
        </fieldset>
        <p>
        <button type="submit" class="btn btn-primary">SEND</button>
        </p>
    </form>
    <footer></footer>
</div>

