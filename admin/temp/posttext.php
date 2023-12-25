<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}

$code = $_POST['variable'];
$heading = $_POST['heading'];
$link=$_POST['link'];



$query = "INSERT INTO pagesdata (heading,linktext,pagecode) VALUES ('$heading','$link','$code')";
$result = mysqli_query($con, $query);

if ($result) {
echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">';
echo 'New Event Data Added successfully.';
echo '<br>'; // Add line break for button positioning

// Button HTML
echo '<a href="choosetextdata.php" style="display: inline-block; background-color: #1a73e8; padding: 5px 10px; border-radius: 8px; color: white; text-decoration: none;font-size: 38px;">Go Back</a>';

echo '</div>';

} else {
echo "Error storing file names in the database: " . mysqli_error($con);
}

?>
