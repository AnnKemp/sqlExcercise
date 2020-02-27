<?php


class Validation
{
    private $errorArray;
    private $nameErr="";
    private $emailErr="";
    private $urlErr="";

    public function ifempty($toValidate): array
    {
        $this->errorArray=[];

        for($i=0;$i<count($toValidate);$i++){
            if($toValidate[$i]=="") {
                $this->errorArray[$i] = $toValidate[$i];
            }
        }
        return $this->errorArray;
    } // end function ifempty

    public function validate(string $firstname, string $lastname, string $username, string $linkedin, string $github, string $email, string $preferredlanguage, string $avatar, $video, string $quote, string $quote_author)
    {
        function validateText($letters)  // removed public because it gave an error
        {
            if (!preg_match("/^[a-zA-Z ]*$/", $letters)) {
                return $this->nameErr = "Only letters and white space allowed";
            }
        } // of beter een niewe class maken en die dan telkens extenden of een static function maken
         validateText($firstname);
         validateText($lastname);
         validateText($username);
         validateText($quote);
         validateText($quote_author);

        function validateEmail($email) : string // removed public because it gave an error
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $this->emailErr = "Invalid email format";
            }
        }
        validateEmail($email);

        function validateUrl($url) : string {  // had to remove public
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
                    return $this->urlErr = "Invalid URL";
                }
        }

         validateUrl($video);
         validateUrl($github);
         validateUrl($linkedin);

         } // end big validation function
} // end class
