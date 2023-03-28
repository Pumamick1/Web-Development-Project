<?php 
include("connection.php"); 

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Both fields are requried.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE username='$username' and password='$password'"; 

    $result=mysqli_query($db, $sql); 

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['type'] = $row['type'];
        $_SESSION['user_id'] = $row['user_id'];

        if($_SESSION['type'] == 'admin'){
        
        header("location: admin.php"); 
        
        }else{

        header("location: home.php");
        }



    }else
    {
        echo "Incorrect username or password."; 
    }
}

?>