<?php
session_start();
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.0.1/remixicon.css" integrity="sha512-ZH3KB6wI5ADHaLaez5ynrzxR6lAswuNfhlXdcdhxsvOUghvf02zU1dAsOC6JrBTWbkE1WNDNs5Dcfz493fDMhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Digital Library</title>
    <style>
         body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0efef;
        }
        header {
background-color: #1A503E;
height: 120px; /* Adjust the height as needed */
display: flex;
justify-content: left;
align-items: left;
flex-direction: column;
}

#logo {
max-width: 30%;
height: 120px;
/* Additional styling if needed */
}
        .footer-section{
    padding: 60px 0 30px 0;
    background: #1b1b1b;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: 16px;
    color: white;
    
}
.footer-section a{
    color:rgb(0, 145, 255)
}

.heading{
    display: flex;
    justify-content: left;
    align-items: left;
    font-size: 16px;
    height: 90px;
    font-weight: bold;
    background-color: #0D7751;
    color: white;
    padding-left: 100px;
    
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: 16px;
    
}
.panel-heading{
    width: 65%;
    height: 30px;
    text-decoration: none;
    overflow: hidden;
    text-wrap: wrap;
    padding-left: 20px;
    vertical-align: middle;
    margin-bottom: 5px;
    border-radius: 5px;
    border: 1px solid #ddd;
    color:#009688;
    border-bottom: 1px solid #ddd !important;
    background-color: rgba(238, 238, 238, 0.853) !important;
    box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
    
}
.panel-heading a{
    color: #009688;
    text-decoration: none;
    margin-top: 5px;
    margin-bottom: auto;
    padding-left: 20px;
    
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    
}


    </style>
</head>
<body>
    <header>
        <a href="index.php"><img src="polylogo.png" alt="Polytechnic Logo" id="logo"></a>

    </header>
    <div class="heading">
        <h1>Online Learning Resources</h1>
    </div><br><br>
    <div class="container">
       
       
        <?php
             $q = mysqli_query($con, "SELECT heading,linktext FROM pagesdata WHERE pagecode='olr'") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          
          echo ' <div class="panel-heading">
          <a href="file_uploads/'.$row[1].'"target="_blank" style="display: flex; align-items: center;">'.$row[0].'</a>
      </div>';
         }?>
       
    </div>

    <br><br>
    <br><br><br><br><footer class="footer-section">
        <a href="index.php"><img src="polylogo.png" alt="Polytechnic Logo" id="logo"></a><br><br>
        <span>
            <i class="ri-map-pin-line"></i>&nbsp;Address:<br>Dr B R A GMR Polytechnic,Bommuru,<br>Rajamahendravaram,<br>533124.<br><br>
            <i class="ri-phone-line"></i>&nbsp;Call Us:<br><a href="tel:09912342072" target="_blank">+91 9912342072</a><br><a href="tel:09912342072" target="_blank">+91 9912342072</a><br><br>
            <i class="ri-time-line"></i>&nbsp;Visiting time:<br>Mon-Sat 9:00AM - 05:00PM<br><br>
            <i class="ri-pages-line"></i>&nbsp;College Website:<br><a href="https://drbragmrrjy.co.in/" target="_blank">drbragmrrjy.co.in</a>
        </span>
        <br><br>
        <span>©2023 Dr.B.R.A.Govt.Model Residential Polytechnic Bommuru Rajamahendravaram. All rights reserved.</span>
    </footer>
</body>
</html>
