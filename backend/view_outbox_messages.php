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
    <title>Dashboard | Dog Keeper</title>
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
    <style type="text/css">
        .dashboards .facts-box .fact-icon {
            font-size: 30px;
            padding-left: 30px;
            opacity: .5;
        }

        .dashboards .facts-box .card {
            padding: 25px 29px;
            color: #fff;
        }

        .equal {
		  display: flex !important;
		  display: -webkit-flex !important;
		  flex-wrap: wrap !important;
		}
    </style>
</head>

<body>
    <div id="site-wrapper" class="site-wrapper panel dashboards">
        <?php include 'header.php'; ?>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
                <?php include 'side_bar.php'; ?>
                <div class="page-container">
                    <div class="container-fluid">
                        <!-- <div class="page-content-wrapper d-flex flex-column justify-content-center" style="min-height: 800px">
                            <div style="padding: 10px;"></div>
                           <div class="features card-deck">
                            <div class="card rounded-0 border-0 bg-transparent mb-6">
                                <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                    <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1" >15</span>
                                    <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">All <br> Listings</span>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0 bg-transparent mb-6">
                                <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                    <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1">0</span>
                                    <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Pending<br> Listings</span>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0 bg-transparent mb-6">
                                <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                    <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">12</span>
                                    <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">published<br> Listings</span>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0 bg-transparent mb-6">
                                <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                    <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 experied">2</span>
                                    <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Experied<br> Listings</span>
                                </div>
                            </div>
                            <div class="card rounded-0 border-0 bg-transparent mb-6">
                                <div class="card-body d-flex align-items-center p-6 bg-white">
                                    <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 active">1</span>
                                    <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active campaign <br> Listings</span>
                                </div>
                            </div>
                        </div> -->
                            <div class="d-flex two-column mb-13 mx-n3" style="min-height: 100vh">
                                <div class="page-left mb-6 px-3">                                   
                                    <?php see_status($_REQUEST); ?>
                                    <div style="padding-bottom: 20px;"></div>
                                    

                                   
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