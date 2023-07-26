<?php
session_start();
include ("conn.php");


if (isset($_POST["submit"])) {
  
 $uname = $_POST["login-username"];
 $pswd = $_POST["login-password"];
 
 $sql = "select * from login where username = '".$uname."' and password = '".$pswd."' ";
 $result = $conn->query($sql);
 
  if($result->num_rows > 0){
      $_SESSION['username'] = $uname;
      header("location:index.php");
      die;
  }
  else {
    echo '<script>alert("Incorrect Password or Username");</script>';
  }
 }
?>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>M and M Admin</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/loggo.jpg">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="57x57">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="72x72">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="76x76">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="114x114">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="120x120">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="144x144">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="152x152">
        <link rel="apple-touch-icon" href="img/loggo.jpg" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
        
<style>

</style>
    </head>
    <body>
        <!-- Login Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <!-- END Login Full Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1> <strong>M & M's</strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="login-username" class="form-control input-lg" placeholder="Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        
                        <div class="col-xs-8 text-right">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary" style="font-size:14px"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                        </div>
                    </div>
                    
                </form>
                <!-- END Login Form -->
   
                <!-- END Register Form -->
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->


        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
      <!--  <script src="js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script> -->
    </body>
</html>