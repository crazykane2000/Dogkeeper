<?php session_start();
  include 'administrator/pdo_class_data.php';
  include 'administrator/add_notification_user.php';
  include 'administrator/function.php';
  include 'administrator/connection.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);
  $pdo_auth = authenticate();    
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));
  $chargees = $_REQUEST['amount'];

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => ($chargees*100),
      'currency' => 'usd'
  ));
  $json = json_encode($charge);

   try {
        $stmt = $pdo->prepare('UPDATE `message` SET  `json`="'.htmlentities($json).'",`stripeToken`="'.$_REQUEST['stripeToken'].'" ,`stripeEmail`="'.$_REQUEST['stripeEmail'].'",`stripeTokenType`="'.$_REQUEST['stripeTokenType'].'", `price`="'.$chargees.'"  WHERE `message_unique_id`="'.$_REQUEST['msg_uniq_id'].'"');

    } catch(PDOException $ex) {
        echo "An Error occured!";
        print_r($ex->getMessage());
    }
    $stmt->execute();

    $fatar = get_data_id_data("message", "message_unique_id", $_REQUEST['msg_uniq_id']);


    $table = "chat";
    $key_list = "`message_unique_id`, `to_id`, `from_id`, `message`,  `price_proposed`, `price_type`";
    $value_list = "'".$_REQUEST['msg_uniq_id']."',";
    $value_list.="'".$pdo_auth['id']."',";
    $value_list.="'".$fatar['receiver_id']."',";
    $value_list.="'".$chargees." USD  Paid Successfully... ',";
    $value_list.="'".$fatar['price']."',";
    $value_list.="'".$fatar['price_type']."'";   
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
  
 
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Stuff | Myproperdeets</title>
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
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        .form-control{
            border-color: #87dfea !important;
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
                           
                            <div class="d-flex two-column mb-13 mx-n3">
                                <div class="page-left mb-6 px-3">                                   
                                    <?php see_status($_REQUEST); ?>
                                    <div style="padding: 20px;text-align: center;" class="px-3">
                                      <?php  echo '<h1>Successfully charged $'.($chargees).'.00!</h1>'; ?>
                                      <hr style="padding: 10px;" />
                                      <center><img src="happystate.gif" style="width: 60%"></center>

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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="../js/app.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>    
   
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2({ placeholder: "Select a Category",
                allowClear: true});
            });
        </script>
    <?php include 'svg.php'; ?>
    <div id="dilip"></div>
</body>

</html>