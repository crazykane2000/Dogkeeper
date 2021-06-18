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
                        <div class="page-content-wrapper d-flex flex-column justify-content-center" style="min-height: 700px">
                            <div style="padding: 10px;"></div>
                            <?php if ($pdo_auth['user_type']=="Administrator") {
                               echo '<div class="features card-deck">
                                        <div class="card rounded-0 border-0 bg-transparent mb-6">
                                            <a href="view_registered_members.php"><div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1" >'.count_tem_in_table("users" ).'</span>
                                                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">All <br> Listings</span>
                                            </div></a>
                                        </div>
                                        <div class="card rounded-0 border-0 bg-transparent mb-6">
                                            <a href="view_dog_owners.php"><div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1">'.get_count_items('users', 'user_type', 'Dog Owner').'</span>
                                                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Total <br> Dog Owners</span>
                                            </div></a>
                                        </div>
                                        <div class="card rounded-0 border-0 bg-transparent mb-6">
                                            <a href="view_service_providers.php"><div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">'.get_count_items('users', 'user_type', 'Consumer').'</span>
                                                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Service<br> Providers</span>
                                            </div></a>
                                        </div>

                                         <div class="card rounded-0 border-0 bg-transparent mb-6">
                                            <a href="all_listings.php">
                                            <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                                <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">'.count_tem_in_table('my_stuff').'</span>
                                                <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">published<br> Listings</span>
                                            </div>
                                            </a>
                                        </div>
                                       
                                    </div>';
                            }else{
                                include 'member_stats.php';
                            } ?>
                            <div class="d-flex two-column mb-13 mx-n3" style="min-height: 70vh">
                                <div class="page-left mb-6 px-3">     
                                    <div class="row">
                                            <img src="gafad.jpg" style="width: 100%">
                                        </div>
                                        <div style="padding: 10px;"></div>                              
                                    <?php see_status($_REQUEST); ?>
                                    <div style="padding-bottom: 20px;"></div>
                                    <div class="facts-box mb-6 row">
                                       
                                    </div>

                                    <?php if (check_admin($pdo_auth)) {
                                        //echo "mana";
                                        include 'admin_dashboard.php';
                                    }else{
                                        include 'user_dashboard.php';
                                    } ?>
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
<?php if($pdo_auth['kyc_status']=="Pending"){ ?>
    <div id="kycModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
           <h4 class="modal-title">KYC Details Required</h4>
          </div>
          <div class="modal-body">
            <div class="card-box items">
                      <div style="padding:10px"></div> 
                       <center>
                         
                            <div class="century" style="font-size: 20px;color: #333"> Upload Your KYC Documents</div>
                            <div class="century" style="font-size: 13px;color: #222">You Must Upload a Government Authorised Dog Care Taker Certificate  <b style="color: red">Document</b> For Taking Dog Related Services</div>
                            <div style="padding:20px"></div>
                            <form method="POST" action="kyc_handle2.php" enctype="multipart/form-data">
                               <div class="form-group">
                                  <input type="text" class="form-control" required="" value="<?php echo $pdo_auth['full_name']; ?>" name="name" placeholder="Enter Your Name or Document Name">
                               </div>
                               

                               <div class="form-group">
                                  <input type="text" class="form-control" readonly name="email" value="<?php echo $pdo_auth['email']; ?>" placeholder="Enter Your Email Id">
                               </div>
                               

                                <div class="form-group">
                                  <input type="text" class="form-control" name="tx_address" readonly="" value="<?php echo $pdo_auth['tx_address']; ?>" placeholder="Enter ETH Address">
                               </div>
                               <input type="hidden" name="page_link" value="dashboard.php">
                               

                                <div class="form-group">
                                  <input type="file" class="form-control" name="file" placeholder="Upload Your Original KYC Document">
                               </div>
                               

                               <button class="btn btn-primary btn-lg" style="width: 100%" type="sumbit" name="submit" >UPLOAD YOUR DOCUMENTS</button>
                             </form>
                         

                            
                       </center>
                       
                   </div>
          </div>          
        </div>

      </div>
    </div>
    <?php }?>

       <!--  <img src="happystate.gif" style="width: 100%">
                <h2>KYC Recieved</h2>
                <p>You will be able to take benefits once you are approved</p> -->
           <?php //  }?>
    
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
    <?php if (check_dogOwner($pdo_auth) && $pdo_auth['kyc_status']) {
    ?> 
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#kycModal').modal({backdrop: 'static', keyboard: false});
        });
    </script>
    <?php 
    } ?>
    
</body>

</html>