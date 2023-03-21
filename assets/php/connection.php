<?php 
$servername = "localhost"; 
$dbname="Userdatabase";
$username = "root";
$password = "root";

//Create connection
$db = new mysql($servername, $username, $password, $dbname); 

//Check connection 
if($db ->connection_error) {
    die("connection failed: " . $db ->connect_error);
}

echo "success";
?>