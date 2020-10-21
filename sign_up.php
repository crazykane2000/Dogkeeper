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
    <title>Signup : Dog Keeper</title>
    <?php  include 'head.php'; ?>
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
        <header id="header" class="main-header header-float header-sticky header-sticky-smart bg-white header-light header-style-01 text-uppercase" >
            <div class="header-wrapper sticky-area" style="color: #777;">
                <?php include 'header.php'; ?>
            </div>
        </header>
        <div style="background-color: #f6f6f6;background-image: url(images/dogs.jpg);background-size: 100%">
            <div id="page-title" class="page-title text-center pt-11" style="margin-top: 100px;">
            <div class="container">
                <div class="h-100">
                    <?php see_status($_REQUEST); ?>
                    <div style="padding: 10px;"></div>
                    <!-- <div class="header-customize-item button"> <a href="#login-popup" data-gtf-mfp="true" data-mfp-options="{&quot;type&quot;:&quot;inline&quot;}" class="btn btn-primary btn-icon-right">Sign In / Sign Up <i class="far fa-user"></i></a></div> -->

                    <div class="form-login-register">
            <div class="tabs mb-8">
                <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center" role="tablist">
                   <li class="nav-item"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false"><h3>Register</h3></a></li>
                </ul>
                <div style="font-size: 20px;font-weight: bold;;line-height: 1.4rem">Join Fastest Growing Community of <span style="color: orange">5000 Dog Owners and Dog Service Providers </span></div>
            </div>
            <div class="tab-content">
                
                <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="form-register">
                        <form action="register_handle.php" method="POST">
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Join As</label>
                                <select type="text" required="" name="user_type" class="form-control" >
                                    <option>Dog Owner</option>
                                    <option>Dog Service Provider</option>
                                </select>
                            </div>
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
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our <a target="_blank" href="terms_and_conditions.php">Terms and Conditions</a> </label>
                                </div>
                            </div>
                            <button type="submit" name="add_user" class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm"> Create an account </button>
                        </form>
                    </div>
                </div>
            </div>
            <div style="height: 100px;background-color: #f6f6f6"></div>   
        </div>
                </div>
            </div>
        </div>
        </div>
        
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