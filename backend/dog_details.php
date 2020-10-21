<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    $fata = get_data_id_data("my_dog", "id", $_REQUEST['81f890e3c2d532abf67f3151939c52cd']);
    //print_r($fata);
     ?>
    
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $fata['listing_title']; ?> | Dog Keeper</title>
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
                            <?php see_status($_REQUEST); ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;"><?php echo $fata['listing_title']; ?>   </h4>
                                            <?php 
                                                $status ="active";
                                                $type='<span class="badge badge-success d-inline-block mr-1">Female</span>';
                                                 if ($fata['status']=="Pending") {
                                                    $status = "pending";
                                                }else{
                                                    $status ="active";
                                                }
                                                if ($fata['breed']=="Male") {
                                                    $type = '<span class="badge badge-info d-inline-block mr-1">Male</span>';
                                                }
                                             ?>
                                            <ul class="list-inline store-meta d-flex flex-wrap align-items-center">
                                                <li class="list-inline-item"><?php echo $type; ?>
                                                <span><b style="font-weight: bold;color: green">Dog Name : </b> USD <?php echo $fata['dog_name']; ?> (<?php echo $fata['breed']; ?>)</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                <a target="_blank" href="https://maps.google.it/maps?q=<?php echo ($fata['location']); ?> " class=" text-link text-decoration-none d-flex align-items-center">
                                                <span class="d-inline-block mr-2 font-size-md">
                                                <i class="fal fa-map-marker-alt"> </i>
                                                </span>
                                                <span><?php echo $fata['location'];  ?></span>
                                                </a>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                <span class="mr-1"><i class="fal fa-clock"></i></span>
                                                <span><?php echo $fata['date'];  ?></span>
                                                </li>
                                            </ul>
                                            <hr/>
                                            <div style="padding: 10px;"></div>
                                            <div id="demo" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <?php 
                                                $i=1;
                                                $active ="";
                                                $fada = get_data_col("uploaded_files", "uniq_id", $fata['uniq_id']);
                                                //print_r($fada);
                                                foreach ($fada as $key => $value) {
                                                    if ($i==1) {
                                                        $active ="active";
                                                    }else{$active ="";}
                                                   echo '<div class="carousel-item '.$active.'">
                                                          <img src="uploaded_data/thumb/'.$value['file'].'" style="width:100%" alt="Los Angeles">
                                                        </div>';
                                                        $i++;
                                                }
                                             ?>
                                              </div>
                                              <!-- Left and right controls -->
                                              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                              </a>
                                              <a class="carousel-control-next" href="#demo" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                              </a>

                                            </div>
                                            <div style="padding:10px;"></div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <b>Dog Breed</b> : <?php echo $fata['breed']; ?><hr/>
                                                    <?php echo $fata['description']; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e">Contact Details </h4><hr/>
                                            <div style="padding: 10px;"></div>
                                            <!-- Google Map Here -->
                                            <?php $url = 'https://maps.google.it/maps?q='.urlencode($fata['location']).'&output=embed&zoom=15'; ?>
                                            <iframe width="100%"  frameborder="0" scrolling="no" width="100%" height="450"  marginheight="0" marginwidth="0" src="<?php echo $url; ?>"></iframe>

                                            <div class="card p-4 widget border-0 infomation pt-0 bg-gray-06">
                                                <div class="card-body px-0 py-2">
                                                    Listed by : <?php $names = get_data_id_data("users", "id", $fata['uploaded_by_id']); ?>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                                            <span class="item-icon mr-3"><i class="fal fa-user"></i></span>
                                                            <span class="card-text"> User  : <a href="location_ads.php?81f890e3c2d532abf67f3151939c52cd=<?php echo $fata['id'];  ?>" class=" text-link"><?php echo $names['full_name'];  ?></a></span>
                                                        </li>

                                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                                            <span class="item-icon mr-3"><i class="fal fa-map-marker-alt"></i></span>
                                                            <span class="card-text"> Location : <a href="location_ads.php?81f890e3c2d532abf67f3151939c52cd=<?php echo $fata['id'];  ?>" class=" text-link"><?php echo $fata['location'];  ?></a></span>
                                                        </li>
                                                       
                                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                                            <span class="item-icon mr-3"><i class="fal fa-globe"></i></span>
                                                            <span class="card-text">Email Address  :<a href="mailto:<?php echo $names['email']; ?>"> <?php echo $names['email']; ?></a></span>
                                                        </li>
                                                       
                                                    </ul>
                                                    <hr/>

                                                    <div><b>User Type : </b> <?php echo $pdo_auth['user_type']; ?></div>
                                               <div><b>Status : </b> <span class="badge badge-success">Approved</span></div>
                                               <div><b>Tx Address : </b> <?php echo $pdo_auth['tx_address']; ?></div>
                                               <div><b>Joining Date : </b> <?php echo $pdo_auth['date']; ?></div>
                                               <br/>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $pdo_auth['tx_address']; ?>&choe=UTF-8"> 
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <img src="profile/<?php echo $pdo_auth['file']; ?>" style="width: 200px;border-radius: 50%">
                                                    </div>
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
        </div>
    </div>

    <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Message to The Seller</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" id="lokj_manage_account">
            Modal body..
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
    <script type="text/javascript">
        $(function(){
          $("#fadac").click(function(){
           var id = $(this).data("seller");
           var stuff_id = $(this).data("stuff_id");
            $("#lokj_manage_account").load("load_seller_message.php", {'seller_id':id, 'stuff_id':stuff_id});
        });
    });
       
    </script>
</body>

</html>