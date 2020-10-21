<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'googleAnalytics.php'; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe | DogKeeper</title>
    <?php  include 'head.php'; ?>
    <script src="/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="site-wrapper" class="site-wrapper page-about">
        <header id="header" class="main-header header-float  header-sticky-smart bg-white header-light header-style-01 text-uppercase" >
            <div class="header-wrapper sticky-area" style="color: #777;">
                <?php include 'header.php'; ?>
            </div>
        </header>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="banner" style="background-image: url(images/daxac.jpg);">
                <div class="container">
                    <div class="banner-content text-center" style="padding-top:270px;padding-bottom: 100px">
                        <div class="heading" data-animate="fadeInDown">
                            <h1 class="mb-0 text-gray"> Subscribe <span style="color: orange">DogKeeper</span>  </h1></div>
                            <br/><br/>
                    </div>
                </div>
            </div>
            <div class="about-intro text-center pt-12 pb-11">
                <div class="container">
                    <div class="jumbotron mb-9 bg-transparent p-0 text-dark" style="text-align: left;">
                        <h3 class="mb-7"> Subscribe to our News Letters and Offers. </h3>
                        <?php see_status($_REQUEST); ?>
                        <br/>
                        
                        <form action="subscribe_handle.php" method="POST">
                            <?php $email = "";
                                if (isset($_REQUEST['email'])) {
                                    $email = $_REQUEST['email'];
                                }
                             ?>
                             <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter email address to subsdcribe" style="border-color: #ccc;" >
                               <div style="padding: 4px;"></div>
                               <center><button class="btn btn-primary" style="border-radius: 0;">Subscribe to Email List</button></center>
                        </form>
                        
                    </div>
                   
                </div>
            </div>
           
           
            <?php include 'red_patta.php'; ?>
        </div>
        
         
        <?php include 'footer.php'; ?>
    </div>
    <?php include 'popup.php'; ?>
    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/popper/popper.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
    <script src="vendors/counter/countUp.js"></script>
    <script src="vendors/hc-sticky/hc-sticky.js"></script>
    <script src="vendors/isotope/isotope.pkgd.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendors/slick/slick.js"></script>
    <script src="vendors/waypoints/jquery.waypoints.js"></script>
    <script src="vendors/air-datepicker/js/datepicker.min.js"></script>
    <script src="vendors/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="js/app.js"></script>
    <?php include 'svg.php'; ?>
</body>

</html>