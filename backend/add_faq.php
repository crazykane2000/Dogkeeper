<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo_auth = authenticate(); ?>
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add FAQ | Dog Keeper</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="../vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../vendors/slick/slick.css">
    <link rel="stylesheet" href="../vendors/animate.css">
    <link rel="stylesheet" href="../vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div id="site-wrapper" class="site-wrapper panel dashboards">
        <?php include 'header.php'; ?>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
                <?php include 'side_bar.php'; ?>
                <div class="page-container">
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column justify-content-center" style="min-height: 700px">
                           
                            <div class="d-flex two-column mb-13 mx-n3">
                                <div class="page-left mb-6 px-3">
                                   
                                    <?php see_status($_REQUEST); ?>
                                    <div style="padding: 20px;" class="px-3">
                                           <form action="faq_handle.php" method="POST">
                                               <div style="padding: 20px;background-color: #fff;width:100%;min-height: 600px">
                                                   <h5>Add FAQ  </h5><hr/>
                                                    <div style="padding: 10px;"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Enter Question</label>
                                                        <input type="text" required="" name="question" placeholder="Enter Question" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Enter Answer</label>
                                                        <textarea type="text" required="" name="answer" rows="6" placeholder="Enter Answer" class="form-control"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary">Enter FAQ</button>
                                                    </div>


                                               </div>
                                           </form>
                                       </div>
                                </div>
                                <div class="page-right px-3">
                                    <div class="card rounded-0 border-0 contact py-6 px-3">
                                        <div class="card-body text-center p-0">
                                            <div class="contact-icon text-dark mb-3">
                                                <svg class="icon icon-headset">
                                                    <use xlink:href="#icon-headset"></use>
                                                </svg>
                                            </div>
                                            <div class="text-dark font-size-md mb-5">
                                                <p class="mb-2">Have any problem and
                                                    <br> need support? </p>
                                                <p class="font-weight-semibold h5 mb-2"><a href="../contact.php">Contact Us</a></p>
                                                <!-- <p>Or chat with us</p> -->
                                            </div> <!-- <a href="contact_us.php" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a> --></div>
                                    </div>
                                </div>
                            </div>
                            <?php include 'footer.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'login_popup.php'; ?>
    
    <script src="../vendors/jquery.min.js"></script>
    <script src="../vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="../vendors/popper/popper.js"></script>
    <script src="../vendors/bootstrap/js/bootstrap.js"></script>
    <script src="../vendors/hc-sticky/hc-sticky.js"></script>
    <script src="../vendors/isotope/isotope.pkgd.js"></script>
    <script src="../vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../vendors/slick/slick.js"></script>
    <script src="../vendors/waypoints/jquery.waypoints.js"></script>
    <script src="../vendors/air-datepicker/js/datepicker.min.js"></script>
    <script src="../vendors/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="../js/app.js"></script>
    <?php include 'svg.php'; ?>
</body>

</html>