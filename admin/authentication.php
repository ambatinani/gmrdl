<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$result = mysqli_query($con, "SELECT username FROM admin WHERE username = '$username' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    

    $_SESSION["username"] = $username;
    
    header("location:addnotification.php");
} 
else
{

    
    echo '<div style="display: flex; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">';
    echo "Login Failed!Invalid Credentials";
    echo '</div>';
}
    


?>