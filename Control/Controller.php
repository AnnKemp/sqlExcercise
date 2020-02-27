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
                // add data to database  // elke keer als ik refresh in de browser voegt ie die laatste data opnieuw toe  dus ik moet ergens mijn $_Post terug leegmaken

                $data_insert = new Database();
                $data_insert->insert($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);

                $_POST['firstname']=$_POST['lastname']=$_POST['username']=$_POST['linkedin']=$_POST['github']=$_POST['email']=$_POST['lang']=$_POST['fileToUpload']=$_POST['video']=$_POST['quote']=$_POST['quote_author']="";
            }
        }
            // add validation to form   -  making the object
    /*        $data_validatie=new Validation();
            // making the array to validate
            $toValidate = array($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'],  $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);

            // die errom met [1] gebruiken om in de view error aan te duiden wanneer iets leeg is
            $errom=$data_validatie->ifempty($toValidate);
            // geef terug $errom[0] is empty  om aan te duiden dat een veld leeg is

            // deze waarden nog opvangen om
            $data_validatie->validate($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'],  $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);
        }*/
        //load the view
        require 'View/homepage.php';
    }
}
