<?php
session_start();
include_once 'dbConnection.php';

if ((isset($_SESSION['username']))) {
    header("location:addnotification.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="image.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="@@class">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                   
                    <h4 class="card-title mt-5">Sign in to Admin Panel</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="post" name="myform" class="signin_validate row g-3" action="authentication.php">
                            <div class="col-12">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Enter your Username"
                                    name="username">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>


</body>

</html>