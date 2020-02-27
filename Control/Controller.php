<?php
declare(strict_types=1);

class Controller
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // to get the data out of the database and show them in the index page
            $show_rows = new Database();
            $user = $show_rows->show_alldata();

            if (isset($_POST['firstname'])) {
                // add data to database

                $data_insert = new Database();
                $data_insert->insert($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author'], $_POST['password']);

// make the posts empty
$_POST['firstname']=$_POST['lastname']=$_POST['username']=$_POST['linkedin']=$_POST['github']=$_POST['email']=$_POST['lang']=$_POST['fileToUpload']=$_POST['video']=$_POST['quote']=$_POST['quote_author']=$_POST['password']="";

 // add validation to form   -  making the object
$data_validatie=new Validation();

 // making the array to check if empty
$toValidate = array($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'],  $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);

// die $errom met [1] gebruiken om in de view error aan te duiden wanneer iets leeg is moet dat nog doen
$errom=$data_validatie->ifempty($toValidate);
//print_r($errom);  // this is still empty
            }
        }
// deze waarden nog opvangen om
     /*       $data_validatie->validate($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'],  $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);
        }*/
        //load the view
        require 'View/homepage.php';

//----------------------------- for the profile page ------------------------------------------------------
        if($_SERVER["REQUEST_METHOD"] == "GET"){  // nog eens checken ik moet testen of link geklikt da's eerder javascript

            $id=$_GET['user'];

            $show_profile = new Database();
            $show_profile->get_data_for_profile($this->id);
            $userprofile = $show_profile->show_userdata();

            require "View/profile.php";
                }
        }

}
