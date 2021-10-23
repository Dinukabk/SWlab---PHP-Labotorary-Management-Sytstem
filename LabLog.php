

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'sonalihospitle');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<?php

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE Username = '$myusername' and  Password  = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        
         
         header("location: labHome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sw Lab </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i>LabSW@gmail.co</li>
                            <li><i class="fas fa-phone-square"></i> +94254576686</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                        <img src="assets/images/logo.jpg" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="http://localhost/Swlab">Home</a></li>
                        
                            <li><a href="http://localhost/Swlab/AdminLogin.php">Admin Login</a></li>
                            <li><a href="http://localhost/Swlab/plog.php">Patient Login</a></li>
                            <li><a href="http://localhost/Swlab/LabLog.php">Laboratorist Login</a></li>
                            <li><a href="http://localhost/Swlab/Rlog.php">Reciptionist</a></li>
                            <li><a href="http://localhost/Swlab/DLog.php">Doctor Login</a></li>
                            <li><a href="http://localhost/Swlab/chatbot">ChatBot</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>
    <br>
     <br>
       <br>
         
      
      <style type = "text/css">
         a {
  
}
         body {

            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
             background-image: url("abc.png");
             align-items: center;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   <br>
     <br>
       <br>
         <br>
           <br>
             <br>
               <br>
                 <br>
                   <br>
                     <br>
                       <br>  <br>
   <body bgcolor = "#FFFFFF">
   <div  style="margin-left: 550px" align="center" class="col-md-4" >
          <div  align="center" class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div align="center" class="card-body">
              <center>
                <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
                <br>
              <h3 >laboratories Login</h3><br>
              <form class="form-group" method="POST" action="LabLog.php">
                <div class="row" align="center">
                  <div class="col-md-4"><label>Email-ID: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter email ID" required/></div><br><br>
                  <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                  <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <div class="row">
                 <div class="col-md-4"  style="padding-left: 160px;margin-top: 10%">
                    <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary"></center></div>           
                 <!--  <div class="col-md-8" style="margin-top: 10%">
                    <a href="index.php" class="btn btn-primary">Back</a></div> -->
                </div>
              </form>
            </center>
            </div>
          </div>
        </div>


<br>
<br>
<br>
<br>
<br>
<br>

 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        SW LABORATORY (PVT) Ltd

                    <p>Sw laboratories offers a comprehensive cloud based lab management at system. Lab software in sri Lankan fully integrates features and elements such as report generation, sample collection, and patient registration using a friendly interface that offers seamless administrative, operative and patient management.
Working process
Patient registration and billing
Sample collection and examination.
Report generation and dispatch report via email,whatsapp.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                       YOU can contact us on 24-7 and for your inquiries.0
 0713066925
 <br>
                        
<br>
                        Fax-0112456789<br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="sw.laboratory24@yhoo.com" class="">sw.laboratory24@yhoo.com</a><br>
                        Facebook-swlaboetory
                        Instagram
                        Linked in

                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="">2021&copy; All Rights Reserved | Designed and Developed by SonaliS</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>


</html>