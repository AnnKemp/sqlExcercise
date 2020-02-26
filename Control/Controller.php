<?php
declare(strict_types=1);

class Controller
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST){

        // to get the data out of the database and show them in the index page
        $show_rows=new Database();
        $user=$show_rows->show_alldata();

        if(isset($_POST['firstname'])) {

            $data_insert=new Database();
            $data_insert->insert($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['linkedin'],  $_POST['github'], $_POST['email'], $_POST['lang'], $_POST['fileToUpload'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);

        }
        //load the view
        require 'View/homepage.php';
    }
}
