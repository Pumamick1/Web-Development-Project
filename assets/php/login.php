<? php include("connection.php");

if(empty($_post["username"])|| empty($_POST["password"]))
{
    echo "Please input both fields"; 
}else
{ 
    $username=$_post['username']; 
    $username=$_post['password'];
    $sql = "SELECT uid FROM users WHERE username = '$username' and password = '$password'";
    $result=mysqli_query($db, $sql); 

    if(mysqli_num_rows($result) == 1)
    {
        header("location: home"); //redirects to another page
    }else{
        echo "Incorrect username or password."; 
    }
}
?> 