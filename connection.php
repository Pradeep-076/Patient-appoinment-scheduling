<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "edoc-doctor-appointment-system"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>

