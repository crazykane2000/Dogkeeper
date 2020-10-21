<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Dog Keeper</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="../vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../vendors/slick/slick.css">
    <link rel="stylesheet" href="../vendors/animate.css">
    <link rel="stylesheet" href="../vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../style.css">
    <style type="text/css">
        td{padding: 10px !important;}
        .gm-style .gm-style-iw {
            font-weight: 300;
            font-size: 13px;
            padding: 10px !important;
            overflow: hidden;
        }
    </style>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="site-wrapper" class="site-wrapper panel dashboards">
        <?php include 'header.php'; ?>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
                <?php include 'side_bar.php'; ?>
                <div class="page-container">
                    <div class="container-fluid" style="min-height: 700px">
                        <div class="page-content-wrapper d-flex flex-column" style="margin: 20px">
                             <?php //see_status($_REQUEST); ?>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-lg-6">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;">Edit Profile </h4>
                                           <hr/>
                                           <?php see_status($_REQUEST); ?>
                                           <div style="padding: 15px;">
                                              <center>
                                                  <div style="position: relative;">
                                                      <img src="profile/<?php echo $pdo_auth['file']; ?>" style="width: 200px;border-radius: 50%">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cyModal" style="position: absolute;bottom: -20px;left: 50%;border-radius:30px;">
                                                         <i class="far fa-pencil"></i>
                                                        </button>
                                                  </div>
                                                 

                                                  <div style="padding:20px;"></div>
                                              

                                               <hr/>
                                              
                                              </center>
                                              <form action="profile_update.php" method="POST">
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="<?php echo $pdo_auth['full_name']; ?>" required="">
                                                 </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" required="" name="password" value="<?php echo $pdo_auth['password']; ?>" placeholder="Password">
                                                  </div>
                                                  <hr/>
                                                  <button type="submit" class="btn btn-primary btn-block" name="update_user">Update Profile</button>
                                                </form>

                                           </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            
                        </div>
                    </div>
                    <?php include 'footer.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="cyModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Change Profile Picture</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="POST" action="update_photo.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <input type="file" class="form-control" required="" name="file"  placeholder="Enter Profile Image">
                    <small id="emailHelp" class="form-text text-muted">It must be JPG  or PNG</small>
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Change Image</button>
                </form>
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