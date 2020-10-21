<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';

  ?><!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include 'googleAnalytics.php'; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | DogKeeper</title>
    <?php  include 'head.php'; ?>
    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <div id="site-wrapper" class="site-wrapper page-contact" style="background-color: #eee">
         <header id="header" class="main-header header-float bg-white header-light header-style-01 text-uppercase" >
            <div class="header-wrapper sticky-area" style="color: #777;">
                <?php include 'header.php'; ?>
            </div>
        </header>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-13">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12312311.250712024!2d-104.68542524492793!3d41.11410267877449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1586615247510!5m2!1sen!2sin" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="container">
                <div class="pt-12">

                    <div class="heading text-center mb-10">
                        <h3 class="mb-0 lh-12">Feedback? <span style="color: orange">Suggestions?</span> Questions? Bored?</h3>
                        <div style="padding: 3px;opacity: .6"></div>
                        <h2 style="font-size: 22px;opacity: .7">We want to hear from you!</h2>
                        <p style="font-size: 19px">You can mail us directly at : <a href="mailto:hi@DogKeeper.com" style="color: orange">hi@DogKeeper.com</a></p>
                    </div>
                        <?php see_status($_REQUEST); ?>
                </div>
                <div class="form-contact">
                    <div class="form-wrapper px-3 px-sm-12 pt-11 pb-12">
                        <h3 class="mb-9 text-center">Get In Touch</h3>
                        <form action="contact_handle.php" method="POST">
                            <div class="row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" class="form-control bg-transparent text-dark rounded-0 pl-0 font-size-md" required name="name" placeholder="Name" id="name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control bg-transparent text-dark rounded-0 pl-0 font-size-md" required name="email" placeholder="Email Address" id="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subject" class="sr-only">Phone</label>
                                    <input type="text" class="form-control bg-transparent text-dark rounded-0 pl-0 font-size-md" required name="phone" placeholder="Phone" id="subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="text-dark font-size-md"> Message </label>
                                <textarea required name="message" class="form-control bg-transparent text-dark rounded-0 pl-0" id="message"></textarea>
                            </div>
                            <div class="text-center pt-10">
                                <button class="btn  btn-primary btn-lg" type="submit">Submit Query & Request a callback </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="padding: 20px;"></div>
                
            </div>
        </div>
        <?php include 'red_patta.php';  ?>
       <?php include 'footer.php'; ?>
    </div>
    <?php include 'popup.php'; ?>
    
    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/popper/popper.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
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