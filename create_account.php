<?php

include("connection.php");

$register_username = $_POST["register_username"];
$register_password = $_POST["register_password"];
$register_email = $_POST["register_email"]; 

$sql = "INSERT INTO users (username, password, email) VALUES ('$register_username', '$register_password', '$register_email')"; 

if(mysqli_query($db, $sql)) {
}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");

?>

