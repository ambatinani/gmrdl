<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}

$notification = $_POST['notification'];


// Update the c_message field in the textdata table using a prepared statement
$query = "UPDATE `notification` SET text = ?";

$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, 's', $notification);

if (mysqli_stmt_execute($stmt)) {
    echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">Text Data Updated successfully.<br><a href="index.php" style="display: inline-block; background-color: #1a73e8; padding: 5px 10px; border-radius: 8px; color: white; text-decoration: none;font-size: 38px;">Go Back</a></div>';
} else {
    echo "Error updating text data: " . mysqli_error($con);
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
