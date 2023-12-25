<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}

$pagecode=$_POST['variable'];
$heading=$_POST['heading'];

// Directory to store the uploaded files
$targetDir = "../file_uploads/";

// Get the file names
$fileName1 = $_FILES["reviewprofile"]["name"];


// File paths for moving the uploaded files
$targetFilePath1 = $targetDir . $fileName1;


// Check if the file types are allowed
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','PDF');
$fileType1 = pathinfo($targetFilePath1, PATHINFO_EXTENSION);


if (in_array($fileType1, $allowTypes) ) {
    // Upload files to the server
    if (move_uploaded_file($_FILES["reviewprofile"]["tmp_name"], $targetFilePath1)) {
        // Store file names in the database
        $query = "INSERT INTO pagesdata (linktext,pagecode,heading) 
                  VALUES ('$fileName1','$pagecode','$heading')";
        $result = mysqli_query($con, $query);
        
        if ($result) {
            echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">';
            echo 'New File Added successfully.';
            echo '<br>'; // Add line break for button positioning

            // Button HTML
            echo '<a href="choosetextdata.php" style="display: inline-block; background-color: #1a73e8; padding: 5px 10px; border-radius: 8px; color: white; text-decoration: none;font-size: 38px;">Go Back</a>';

            echo '</div>';

        } else {
            echo "Error storing file names in the database: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading files to the server.";
    }
} else {
    echo "Invalid file types. Allowed file types are: " . implode(", ", $allowTypes);
}

?>
