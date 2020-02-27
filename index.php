<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// include all your controllers here
require 'Control/Controller.php';

// include all your model files here
require 'Model/Database.php';
require 'Model/Validation.php';

$controller = new Controller();
$controller->render($_GET, $_POST); // hier de échte post en get meegeven