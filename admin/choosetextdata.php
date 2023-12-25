<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
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
                                    <h3>Add Pages Data</h3>
                                    
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
                                    <h4 class="card-title">Pages Data</h4>
                                </div>
                                <div class="card-body">
                                    <form action="edit_text.php" method="post">
                                        <div class="row g-3">
                                           
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-3">
                                                <label class="form-label">Choose a field to edit:</label>
                                                <select class="form-select" name="textvariable" id="textvariable">
                                                    <option value="cse">Computer Engineering</option>
                                                    <option value="ece">Electronics & Communication Engineering</option>
                                                    <option value="mech">Mechanical Engineering</option>
                                                    <option value="general">General</option>
                                                    <option value="lms">Learning Management System</option>
                                                    <option value="engineering">Engineering</option>
                                                    <option value="science">Science</option>
                                                    <option value="cs">Communication Skills</option>
                                                    <option value="pd">Personal Development</option>
                                                    <option value="polycet">POLYCET</option>
                                                    <option value="ebooks">E-Books</option>
                                                    <option value="emagazines">E-Magazines</option>
                                                    <option value="ejournals">E-Journals</option>
                                                    <option value="onp">Online Newspaper</option>
                                                    <option value="olr">Other Learning Resources</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-xxl-12 col-12 mb-3">
                                                <button class="btn btn-primary">Edit</button>
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