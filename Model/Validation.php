<?php


class Validation
{
    private $errorArray=[];
    private $nameErr="";
    private $emailErr="";
    private $urlErr="";

    public function ifempty($toValidate)
    {
        for($i=0;$i<count($toValidate)$i++){
            if($toValidate[$i]=="") {
                $this->errorArray[$i] = $toValidate[$i];
            }
        }
        return $this->errorArray;
    } // end function ifempty

    public function validate($firstname, $lastname, $username, $linkedin, $github, $email, $preferredlanguage, $avatar, $video, $quote, $quote_author)
    {
        public function validateText($letters)
        {
            if (!preg_match("/^[a-zA-Z ]*$/", $letters)) {
                return $this->nameErr = "Only letters and white space allowed" + $letters; // $letters to check where to place it and cut this part off
            }
        }
         validateText($firstname);
         validateText($lastname);
         validateText($username);
         validateText($quote);
         validateText($quote_author);

        public function validateEmail($email)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->emailErr = "Invalid email format";
            }
        }
        validateEmail($email);

        public function validateUrl($url) {
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
                    return $this->urlErr = "Invalid URL";
                }
        }

         validateUrl($video);
         validateUrl($github);
         validateUrl($linkedin);

         } // end big validation function
} // end class
