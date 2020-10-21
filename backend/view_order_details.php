<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
$fara = get_data_id_data("message", "id", $_REQUEST['Order_id_data_middle_is_teh_kanoon']);
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders | Order Id : <?php echo $fara['message_unique_id']; ?> | Dog Keeper</title>
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
                            <?php see_status($_REQUEST); ?>
                            <div style="padding: 20px;"></div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;"> <span style="color: #777">Order Id :</span> <a href="mesages.php?message_unique_id=<?php echo $fara['message_unique_id']; ?>"><?php echo $fara['message_unique_id']; ?></a> </h4>
                                           <hr/>
                                           <div style="padding: 15px;">
                                            <?php 
                                                $order = get_data_id_data("my_stuff", "id", $fara['stuff_id']);
                                                $image = fetch_last_id("uploaded_files", "uniq_id", $order['uniq_id']);
                                                $user = get_data_id_data("users", "id", $fara['receiver_id']);
                                             ?>
                                             <p style="margin: 0">Service Taken</p>
                                             <h5><?php echo $order['listing_title']; ?></h5>
                                             <?php echo substr(strip_tags($order['description']), 0,300); ?>...


                                             <hr/>
                                             <div style="padding: 20px;background-color: #f6f6f6">
                                                 <div class="row">
                                                     <div class="col-sm-4">
                                                         <img src="check-circle.gif" style="width:100%;" />
                                                     </div>
                                                     <div class="col-sm-8">
                                                         <p style="margin: 0">Paid Amount</p>
                                                         <h2 style="margin: 0"><?php echo $fara['price']; ?> USD</h2>
                                                         <p style="margin: 0">Date : <?php echo $fara['date']; ?> </p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div style="padding-left: 10px;"></div>
                                             <b>Token : </b> <?php echo $fara['stripeToken'];  ?>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;"> Json Data</h4>
                                            <hr/>
                                             <div style="padding: 20px;background-color: #f6f6f6;overflow-x: scroll;">
                                                 <?php echo json_encode($fara['json'],JSON_PRETTY_PRINT); ?>
                                             </div>
                                           </div>
                                        </div>

                                    <div class="col-lg-3">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;"> Rating and Review</h4>
                                            <hr/>
                                             <div style="padding: 20px;background-color: #f2f3e6;overflow-x: scroll;">
                                                <p style="margin: 0">Rating Given to</p>
                                                         <h2 style="margin: 0"><?php echo $user['full_name']; ?> </h2>
                                                         <hr/>
                                                <?php 
                                                        if (get_count_items("review", "message_unique_id", $fara['message_unique_id'])>0) {
                                                            $reviews = get_data_id_data("review", "message_unique_id", $fara['message_unique_id']);
                                                            echo $reviews['review'];
                                                        }

                                                        echo '<div style="padding:10px;"></div>';

                                                        for ($i=0; $i <$reviews['rating']; $i++) { 
                                                            echo '<span class="fa fa-star checked" style="color:orange"></span>';
                                                        }
                                                 ?>
                                             </div>

                                             <hr/>
                                             <?php 
                                                if (get_count_items("review", "message_unique_id", $fara['message_unique_id'])>0) {
                                                    echo '<button disabled class="btn btn-sm btn-primary">Ratings and Review Given</button>';
                                                }else{
                                                    echo '<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#reviewModal">Rate and Review</button>';
                                                }
                                              ?>
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

   <div class="modal" id="reviewModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Give here Rate and  Review</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="review_handle.php" method="POST">
                <div class="form-group">
                <label style="color: #333" for="exampleInputPassword1">How much you rate for Service?</label>
                <select required="" name="rating" class="form-control" id="exampleInputPassword1" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <input type="hidden" name="message_unique_id" value="<?php echo $fara['message_unique_id']; ?>">
            <input type="hidden" name="given_by_id" value="<?php echo $pdo_auth['id']; ?>">
            <input type="hidden" name="given_to_id" value="<?php echo $fara['receiver_id']; ?>">
            <input type="hidden" name="stuff_id" value="<?php echo $fara['stuff_id']; ?>">
            <input type="hidden" name="message_id" value="<?php echo $fara['id']; ?>">

            <div class="form-group">
                <label style="color: #333" for="exampleInputPassword1">Whats your Opinion About Service</label>
                <textarea class="form-control" name="review" placeholder="Opinion Here about Service"></textarea>
            </div>
            <hr/>

            <button type="submit" class="btn btn-primary">Submit Review</button>
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