<!--
This website is Developed by Parshuram Reddy (parshuram.sudda@gmail.com && VishnuVardhanReddy(vishnurapuru10@gmail.com)
This can be edited for free 
For More details and decsription contact Authors
This is Useful for Engineering Colleges Respectivly 
-->

<?php
    
  session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Checking is seesion is hod or not 

  if (!isset($_SESSION['username'])) 
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HodLogin.php');
      
      
  }

 if ($_SESSION['username']!='Hod') 
  {
      echo "<script type=\"text/javascript\">
            alert('Only Hod access the Access' )
            </script>";
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HodLogin.php');
      
      
  }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
    



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriInduDepartmentalWebsite-Final</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="padding:0px;">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="color:rgb(159,158,158);background-color:#545555;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-family:ABeeZee, sans-serif;font-size:16px;color:#d7d4d4;">Sri Indu College Of Engineering &amp; Technology</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                <a class="btn btn-outline-dark" role="button" href="HodIndex.php" style="color:rgb(250,252,255);width:79px;margin:12px;border:none;">Home</a>
                <a class="btn btn-outline-dark" role="button" href="register.php" style="color:rgb(250,252,255);width:79px;margin:12px;">Register</a>
                <a class="btn btn-outline-dark" role="button" href="passwordChange.php" style="color:rgb(250,252,255);width:109px;margin:12px;">ChangePass</a>
                <a class="btn btn-outline-dark" role="button" href="index.php" style="color:rgb(250,252,255);width:79px;margin:12px;">Logout</a>
                 <a class="btn btn-outline-dark" role="button" href="Document.html" style="color:rgb(250,252,255);width:79px;margin:12px;">Doc</a>
                <span
                    class="navbar-text"><a href="Developer.php" class="login" style="font-size:20px;">&nbsp;About Dev</a></span>
        </div>
        </div>
    </nav>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="900" style="font-family:Adamina, serif;">Welcome to</h2>
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="1200" style="font-family:Adamina, serif;">&nbsp;Dr.Ch.GVN Prasad </h2>
                <p class="text-center">Navigate Further -&gt;</p>
            </div>
            <div class="buttons"></div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-5"></div>
                <div class="col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="600"><a href="StudentDetails.php" class="butt butt--stripe">     Student  Details Page</a></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="750"><a href="studentMain.php" class="butt butt--stripe">Add Details</a></div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="900"><a href="EditDetails.php" class="butt butt--stripe">Edit Details</a></div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000"><a href="EditSubDetails.php" class="butt butt--stripe">Add Subjects</a></div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1250"><a href="search_credits.php" class="butt butt--stripe">Credits Search</a></div>
            </div>
        </div>
    </div>
    <div class="footer-clean" style="background-color:rgb(49,55,58);">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item"><img style="background-image:url(&quot;assets/img/36929706_1044434599064256_6289139470734196736_n.png&quot;);background-size:cover;height:69px;width:397px;background-color:#31373a;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:50px;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:147px;"></div>
                    <div class="col-lg-3 item social" style="width:313px;">
                        <h3 style="color:rgb(231,231,231);">E-mail Developers @</h3>
                        <ul>
                            <li><a href="mailto:parshuram.sudda@gmail.com" style="color:rgb(225,226,227);width:160px;">Parshuram[dot]sudda[at]gmail[dot]com</a></li>
                            <li style="width:274px;"><a href="mailto:vishnurapuru10@gmail.com" style="color:rgb(215,215,215);width:47px;">Vishnurapuru[(2+3)+5][at]gmail[dot]com</a></li>
                        </ul>
                        <p class="copyright" style="color:rgb(251,252,252);">AiPlus © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>