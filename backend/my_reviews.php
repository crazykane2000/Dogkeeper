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
    <title>My Reviews | Dog Keeper</title>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;">My Reviews </h4>
                                           <hr/>
                                           <div style="padding: 15px;">

                                            <div class="table-responsive">
                                                        <table class="table listing-table listing-table-job table-hover bg-white">
                                                            <tbody>                                                                
                                                                 <?php
                                                                   

                                                                    try {
                                                                          $stmt = $pdo->prepare('SELECT * FROM `review` WHERE `given_by_id`="'.$pdo_auth['id'].'" ORDER BY date DESC ');
                                                                      } catch(PDOException $ex) {
                                                                          echo "An Error occured!";
                                                                          print_r($ex->getMessage());
                                                                      }
                                                                      $stmt->execute();
                                                                      $rada = $stmt->fetchAll();

                                                                        foreach ($rada as $key => $value) {
                                                                        $order = get_data_id_data("my_stuff", "id", $value['stuff_id']);
                                                                        $image = fetch_last_id("uploaded_files", "uniq_id", $order['uniq_id']);
                                                                        $rate = "";
                                                                           for ($i=0; $i <$value['rating']; $i++) { 
                                                                                $rate.='<span class="fa fa-star checked" style="color:orange"></span>';
                                                                            }
                                                                        echo '<tr>
                                                                                <td>
                                                                                    <div class="media align-items-center">
                                                                                        <div class="image mr-3">
                                                                                            <img
                                                                                                    src="uploaded_data/thumb/'.$image['file'].'"
                                                                                                    alt="Top job 1">
                                                                                        </div>
                                                                                        <div class="media-body lh-14">
                                                                                            <div class="text-gray lh-14">'.$order['uploaded_by'].'
                                                                                            </div>
                                                                                            <a target="_blank" class="font-size-md font-weight-semibold text-dark"
                                                                                               href="list_details.php?81f890e3c2d532abf67f3151939c52cd='. $value['stuff_id'].'">3D
                                                                                                '.$order['listing_title'].'</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="width:400px;font-size:13px;line-height:1.4rem">'.$value['review'].'</td>
                                                                                <td>'.$rate.' </td>
                                                                                <td>
                                                                                    <a href="view_order_details.php?Order_id_data_middle_is_teh_kanoon='.$value['message_id'].'" class="btn btn-primary btn-sm">View Details</a>
                                                                                </td>
                                                                            </tr>';
                                                                    }
                                                                 ?>  
                                                            </tbody>
                                                        </table>
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