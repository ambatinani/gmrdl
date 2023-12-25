<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}
$edittext=$_POST['textvariable'];
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

<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div id="main-wrapper">

    <div class="header">
   
 </div>

    <div class="sidebar">
    
      <div class="menu">
        <ul>
            
            <li><a href="addnotification.php">
                    <span><i class="ri-gallery-upload-line"></i></span>
                    <span class="nav-text">Add Notification</span>
                </a>
            </li>
            <li><a href="choosetextdata.php">
                    <span><i class="ri-text"></i></span>
                    <span class="nav-text">Edit Text Data</span>
                </a>
            </li>
           <li class="logout"><a href="logout.php">
                    <span><i class="ri-logout-circle-line"></i></span>
                    <span class="nav-text">Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-4">
                                <div class="page-title-content">
                                    <h3>Upload Page Data</h3>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12">
                    
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Page Data</h4>
                                </div>
                                <div class="card-body">
                                    <form action="posttext.php" method="post" enctype="multipart/form-data">
                                        <div class="row g-3">
                                           
                                            <div class="col-xxl-12 col-12 mb-3">
                                                <label class="form-label">Page Data</label><br>
                                               
                                                <?php
                                                echo '<input type="hidden" name="variable" value="'.$edittext.'"> ';?>
                                               <input class="form-control"  type="text" name="heading" placeholder="enter heading"><br>
                                                 
       
                                               
                                            </div>
                                            <div class="col-xxl-12 col-12 mb-3">
                                                <div class="form-file">
                                                    <label class="form-label">File:</label><br>
                                                    <input type="file" class="form-file-input" id="reviewprofile" name="reviewprofile" accept="application/pdf" required>
                                                    <label class="form-file-label" for="customFile">
                                                        
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-12 mb-3">
                                                 <button class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='tiny.js'></script><script  src="script.js"></script>

<script src="js/scripts.js"></script>


</body>

</html>