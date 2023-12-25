<?php
session_start();
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.0.1/remixicon.css" integrity="sha512-ZH3KB6wI5ADHaLaez5ynrzxR6lAswuNfhlXdcdhxsvOUghvf02zU1dAsOC6JrBTWbkE1WNDNs5Dcfz493fDMhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Digital Library</title>
    <style>
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0efef;
        }

        .section-header {
            background-color: #f0efef;
            border-left: 4px solid; /* Color will be set in the respective section classes */
            padding: 10px;
            font-weight: bold;
        }

        .tabs-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px;
        }

        .tab {
            flex: 1;
            min-width: 100px; /* Minimum width so that the tabs don't get too narrow */
            text-align: center;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            color: white;
            text-decoration: none; /* Removing underline from links */
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 40px; /* Set a fixed height for the tabs */
        }

        .tab:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        /* Specific styles for each section */
        .course-material .section-header {
            border-color: #d35400;
        }

        .course-material .tab {
            background: linear-gradient(to right, #e67e22, #f39c12);
        }

        .learning-resources .section-header {
            border-color: #f1c40f;
        }

        .learning-resources .tab {
            background: linear-gradient(to right, #3498db, #2980b9); /* Blue gradient for this section */
        }

        .featured-collections .section-header {
            border-color: #16a085;
        }

        .featured-collections .tab {
            background: linear-gradient(to right, #48c9b0, #1abc9c); /* Green gradient for this section */
        }

        .study-material .section-header {
            border-color: #e74c3c; /* Reddish color for this section */
        }

        .study-material .tab {
            background: linear-gradient(to right, #e74c3c, #c0392b); /* Red gradient for this section */
        }

        @media (max-width: 768px) {
            .tabs-container {
                flex-direction: column;
                align-items: center;
            }
        }

        header {
background-image: url('topbanner-pic.jpg');
background-size: cover;
background-position: center;
height: 250px; /* Adjust the height as needed */
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}

#logo {
max-width: 50%;
height: 130px;
/* Additional styling if needed */
}

.heading{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
    font-size: 50px;
    font-weight: bold;
    color: white;
    
}

/* ... Your existing CSS styles ... */

.divider {
    text-align: center;
    margin-top: -50px; /* Add space between the header and divider */
}

.divider img {
    width: 100%;
    height:50px;
 
}
.scrolling-text-container {
  overflow: hidden;
  height: 25px;
  white-space: nowrap;
  position: relative;
  color: red;
  font-weight: bolder;
  background-color: yellow;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.scrolling-text {
  animation: scroll-left 20s linear infinite;
  position: absolute;
  top: 0;
  left: 0;
  margin: 0;
  padding: 0;
  width: 100%; /* Added this line to ensure text flows fully */
}

@keyframes scroll-left {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
  200% { /* Add an additional keyframe for continuity */
    transform: translateX(100%);
  }
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

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

    </style>
</head>
<body>
    <div class="scrolling-text-container">
        <div><p class="scrolling-text">
        <?php
             $q = mysqli_query($con, "SELECT text FROM `notification`") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
        </p></div>
    </div>
      
    <header>
       
        <a href="index.php"><img src="polylogo.png" alt="Polytechnic Logo" id="logo"></a>
        <div class="heading">Digital Library</div> 
    </header>
    <div class="divider">
        <img src="divider.svg" alt="Divider">
    </div>
    <br><br>
    <div class="course-material">
        <div class="section-header">COURSE MATERIAL</div>
        <div class="tabs-container">
            <a href="cse.php" class="tab" target="_blank">COMPUTER ENGINEERING</a>
            <a href="ece.php" class="tab" target="_blank">ELECTRONICS & COMMUNICATION ENGINEERING</a>
            <a href="mech.php" class="tab" target="_blank">MECHANICAL ENGINEERING</a>
            <a href="general.php" class="tab" target="_blank">GENERAL</a>
            <a href="lms.php" class="tab" target="_blank">LEARNING MANAGEMENT SYSTEM (LMS)</a>
        </div>
    </div>
    <div class="learning-resources">
        <div class="section-header">LEARNING RESOURCES</div>
        <div class="tabs-container">
            <a href="https://ndl.iitkgp.ac.in/" class="tab" target="_blank">NATIONAL DIGITAL LIBRARY</a>
            <a href="https://onlinecourses.nptel.ac.in/" class="tab" target="_blank">NPTEL</a>
            <a href="https://www.mooc.org/courses" class="tab" target="_blank">NPTEL MOOCs</a>
            <a href="https://swayam.gov.in/" class="tab" target="_blank">SWAYAM</a>
            <a href="https://ekumbh.aicte-india.org/allbook.php" class="tab" target="_blank">AICTE</a>
        </div>
    </div>
    <div class="featured-collections">
        <div class="section-header">FEATURED COLLECTIONS</div>
        <div class="tabs-container">
            <a href="engineering.php" class="tab" target="_blank">ENGINEERING</a>
            <a href="science.php" class="tab" target="_blank">SCIENCE</a>
            <a href="cs.php" class="tab" target="_blank">COMMUNICATION SKILLS</a>
            <a href="pd.php" class="tab" target="_blank">PERSONALITY DEVELOPMENT</a>
            <a href="polycet.php" class="tab" target="_blank">POLYCET</a>
        </div>
    </div>
    <div class="study-material">
        <div class="section-header">STUDY MATERIAL</div>
        <div class="tabs-container">
            <a href="ebooks.php" class="tab" target="_blank">E-Books</a>
            <a href="ejournals.php" class="tab" target="_blank">E-Journals</a>
            <a href="emagazines.php" class="tab" target="_blank">E-Magazines</a>
            <a href="onp.php" class="tab" target="_blank">Online Newspapers</a>
            <a href="olr.php" class="tab" target="_blank">OTHER LEARNING RESOURCES</a>
        </div>
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