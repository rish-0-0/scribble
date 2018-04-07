<?php


$db         = "notes";
$dbhost     = "localhost"; 
$dbuser     = "root"; 
$dbpassword = ""; 


$mysqli = new mysqli($dbhost,$dbuser,$dbpassword,$db);



if ($mysqli->connect_error) {
    die('connection failed : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


?>