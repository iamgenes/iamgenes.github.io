 <?php
 session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a>
                <button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.48);">
                            <strong>Home</strong></a></li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);">
                                <strong>About Us</strong>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);">
                                <strong>Contact Us</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="login-dark" style="background-image:url(&quot;assets/img/home.jpg&quot;);">
        <form action="includes/Signup.inc.php" method="post" style="background-color:rgba(30,40,51,0.68);margin-top:-131px;">
            <h3 style="margin-left:69px;margin-top:-37px;color:#ffffff;">
                <strong>SIGN UP</strong>
            </h3>

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Please fill all the inputs</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidname") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Name should not contain numbers</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidEmailUsername") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Username or E-mail!</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidEmail") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid E-mail!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "invalidUsername") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Username!</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidpwd") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password must contain numbers and alphabets only</strong>
            </p>';
                }
                elseif ($_GET['error'] == "passwordlength") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password must have at least 8 characters</strong>
            </p>';
                }  
                elseif ($_GET['error'] == "passwordcheck") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password mismatch!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "invalidcontact") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Contact!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "usernametaken") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Username Already Taken!</strong>
            </p>';
                }              
            }
            ?>
            
            <!--<p class="text-monospace text-center signup_success" id="signup_success" style="font-size:17px;color:rgb(0,255,102);margin-top:-40px;">
                <strong>Error massages</strong>
            </p>-->
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Firstname" placeholder="First Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Lastname" placeholder="Last Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Username" placeholder="User Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input class="form-control form-control-sm" type="password" name="Password" placeholder="Password" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input class="form-control form-control-sm" type="password" name="RPassword" placeholder="Retype Password" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input class="form-control form-control-sm" type="email" name="Email" placeholder="Email" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-phone"></i>
                <input class="form-control form-control-sm" type="text" name="Contact" placeholder="Contact" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <button class="btn btn-primary active btn-block btn-sm" type="submit" name="signup-submit" data-bs-hover-animate="rubberBand" style="height:35px;">
                    <strong>Sing Up</strong>
                </button>
            </div>
            <a href="Signin.php" data-bs-hover-animate="pulse" class="forgot" style="color:rgb(0,240,255);">
                <strong>Already a Member? Sign In..</strong>
            </a>
        </form>
    </div>
    <div class="footer-dark" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <!--<div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>-->
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
                    </div>
                </div>
                <p class="copyright">TeflonDon © 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>