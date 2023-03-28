<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the ID of the post to be deleted
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
    
    $sql = "DELETE FROM posts WHERE id = $post_id";
    mysqli_query($conn, $sql);
    
    header("Location: index.php");
    exit();
}
?>
