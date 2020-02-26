<?php

class Database
{
    // Properties
    // the connection
    private $conn;
    // the connection data :
    private const HOST='localhost';  // making constants
    private const USER='AnnKemp';
    private const PASSWORD='AnnKemp_116';
    private const DATAB_NAME='becode';

    // Properties for the insert :
    private $sql;

    // Properties to show all data in a table
    private $alldata;

  // Methods
    // the setter for the connection:---------------------------------------------------------------------------------------------------------------------------------

    function __construct() // excecutes inmmediatly the connection
    {
        // Is used in this class by the other methods so it doesn't have return a value
        try {
            $this->conn = new PDO('mysql:host=' . self::HOST. ';dbname=' . self::DATAB_NAME . ';charset=utf8mb4', self::USER, self::PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (PDOException $e) { // this is the right PDO error report stuff
            echo $e->getMessage();
        }
    }
    // Methods
    // the setter for the insert of form-data into the database------------------------------------------------------------------------------------------------------

    function insert($firstname, $lastname, $username, $linkedin, $github, $email, $lang, $avatar, $video, $quote, $quote_author) {

try { // prepare to insert a row into the database
    $this->sql = $this->conn->prepare("INSERT INTO student (firstname, lastname, username, linkedin, github, email, preferredlanguage, avatar, video, quote, quote_author) VALUES (:firstname, :lastname, :username, :linkedin, :github, :email, :preferredlanguage, :avatar, :video, :quote, :quote_author)");

    // this is for security
    $this->sql->bindParam(':firstname', $firstname);
    $this->sql->bindParam(':lastname', $lastname);
    $this->sql->bindParam(':username', $username);
    $this->sql->bindParam(':linkedin', $linkedin);
    $this->sql->bindParam(':github', $github);
    $this->sql->bindParam(':email', $email);
    $this->sql->bindParam(':preferredlanguage', $lang);
    $this->sql->bindParam(':avatar', $avatar);
    $this->sql->bindParam(':video', $video);
    $this->sql->bindParam(':quote', $quote);
    $this->sql->bindParam(':quote_author', $quote_author);

    // execute the sql query and add the data to the database
    $this->sql->execute();

       }catch(PDOException $e){
            echo $this->sql . "<br>" . $e->getMessage();
        }
    }
    // Methods
    // the setter to show all the data out of the data-base into a table ------------------------------------------------------------------------------------------
    function get_alldata() {
        try {
        $this->alldata=$this->conn->query('SELECT id, firstname, lastname, linkedin, email, preferredlanguage FROM student');
        } catch (PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    function show_alldata() {
        $this->get_alldata(); // hier de functie ge_alldata terug aanroepen om $this->alldata er uit te kunnen halen

            return $this->alldata;
        }


/*class DataMapper
{sho
    public static $db;

    public static function init($db)
    {
        self::$db = $db;
    }
}

class VendorMapper extends DataMapper
{
    public static function add($vendor)
    {
        $st = self::$db->prepare(
            "insert into vendors set
            first_name = :first_name,
            last_name = :last_name"
        );
        $st->execute(array(
            ':first_name' => $vendor->first_name,
            ':last_name' => $vendor->last_name
        ));
    }*/
}