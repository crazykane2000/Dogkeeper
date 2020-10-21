<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php'; ?>
  <!doctype html>
<html lang="en">

<head>
    <?php include 'googleAnalytics.php'; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot_password : Myproperdeets</title>
    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <div id="site-wrapper" class="site-wrapper home-main">
        <?php include 'header.php'; ?>
        <div style="background-color: #f6f6f6">
            <div id="page-title" class="page-title text-center pt-11" style="margin-top: 100px;">
            <div class="container">
                <div class="h-100">
                    <?php see_status($_REQUEST); ?>
                    <div style="padding: 10px;"></div>
                    <!-- <div class="header-customize-item button"> <a href="#login-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;}" class="btn btn-primary btn-icon-right">Sign In / Sign Up <i class="far fa-user"></i></a></div> -->

                    <div class="form-login-register">
           
            <div class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="form-login">
                        <form method="POST" action="login_redirect.php">
                            <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username" class="sr-only">Username</label>
                                <input id="username" type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap align-items-center">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" type="password" class="form-control" name="pass" placeholder="Password"> <a href="forgot.php" class="input-group-append text-decoration-none">Forgot?</a></div>
                                    <input type="hidden" name="type" value="Consumer">
                            </div>
                            <div class="form-group mb-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check">
                                    <label class="custom-control-label text-dark" for="check">Remember</label>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8"> Log In </button>
                        </form>
                        
                    </div>
                </div>
                <div class="tab-pane fade " id="register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="form-register">
                        <form action="register_handle.php" method="POST">
                            <div class="font-size-md text-dark mb-5">Create Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Username</label>
                                <input id="username-rt" type="text" required="" name="full_name" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="text" required="" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password-rt" class="sr-only">Username</label>
                                <input id="password-rt" required="" name="pass" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="r-password" class="sr-only">Username</label>
                                <input id="r-password" required="" name="cpass" type="password" class="form-control" placeholder="Retype password">
                            </div>
                            <div class="form-group mb-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check-term">
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our Terms Privacy Policy and</label>
                                </div>
                            </div>
                            <button type="submit" name="add_user" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm"> Create an account </button>
                        </form>
                    </div>
                </div>
            </div>
            <form></form>
        </div>
                </div>
            </div>
        </div>
        </div>
        <div style="height: 100px;background-color: #f6f6f6"></div>   
        <?php include 'footer.php'; ?>
    </div>
   <?php include 'popup.php'; ?>
    
    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/popper/popper.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
    <script src="vendors/hc-sticky/hc-sticky.js"></script>
    <script src="vendors/isotope/isotope.pkgd.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendors/slick/slick.js"></script>
    <script src="vendors/waypoints/jquery.waypoints.js"></script>
    <script src="js/app.js"></script>
    <?php include 'svg.php'; ?>
</body>

</html>