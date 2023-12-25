<?php
$con = new mysqli('localhost', 'root', 'admin', 'library');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
