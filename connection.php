<?php
$servername = "localhost";
$dbname = 'user_database'; 
$username ="root"; 
$password = "";

$db = new mysqli($servername, $username, $password, $dbname); 

//Check connection 
if ($db->connect_error) {
    die("connection failed: " . $db->connect_error);

}

?>