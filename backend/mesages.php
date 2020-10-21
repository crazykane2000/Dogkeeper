<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    require_once('./config.php'); 
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    if (isset($_REQUEST['message_unique_id'])) {
      $fata = get_data_id_data("message", "message_unique_id", $_REQUEST['message_unique_id']);
      $table="message";
      try {
        $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `status`="Approved"');
        } catch(PDOException $ex) {
            echo "An Error occured!";
            print_r($ex->getMessage());
        }
        $stmt->execute();
    }
    else{
      $fata  = fetch_last("message");
    }

    $rafa = $fata;
    //print_r($rafa);
  ?>
    
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Messages | DogKeeper</title>
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
                    <div class="container-fluid" >
                        <div class="page-content-wrapper d-flex flex-column" style="margin: 20px">
                            <?php see_status($_REQUEST); ?>
                            <div style="padding: 10px;"></div>
                                <div class="row" style="min-height: 700px">
                                    <div class="col-lg-4">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;">Users  </h4><hr/>
                                           <div style="padding: 10px;"></div>
                                           
                                               <?php 
                                               $message_unique_id = "";
                                               try {
                                                    $stmt = $pdo->prepare('SELECT * FROM `message` WHERE `receiver_id`="'.$pdo_auth['id'].'" OR `sender_id`="'.$pdo_auth['id'].'"   ORDER BY date DESC ');
                                                } catch(PDOException $ex) {
                                                    echo "An Error occured!";
                                                    print_r($ex->getMessage());
                                                }
                                                $stmt->execute();
                                                $user = $stmt->fetchAll();
                                                $i=1;
                                                foreach ($user as $key => $value) {
                                                  $daras = $value;
                                                    if ($i==1) {
                                                        $message_unique_id=$value['message_unique_id'];
                                                        $product_id = $value['stuff_id'];
                                                    }
                                                    if ($value['status']=="Approved") {
                                                        $color = "999999";
                                                    }else{ $color = "1aa5a5"; }

                                                    
                                                    $sender = get_data_id_data("users","id", $value['receiver_id']);
                                                    $stuff_data = get_data_id_data("my_stuff","id", $value['stuff_id']);
                                                    
                                                    $last_chat = fetch_last_id("chat", "message_unique_id", $daras['message_unique_id']);
                                                    //print_r($last_chat);
                                                    $dax='<i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:15px;color:#fb484e"></i>';
                                                    if ($last_chat['to_id']==$pdo_auth['id']) {
                                                      $dax = '<i class="fa fa-angle-double-left" aria-hidden="true" style="font-size:15px;color:#20bbbb"></i>';
                                                    }


                                                    $display_name = "";

                                                    if ($pdo_auth['id']==$stuff_data['uploaded_by_id']) {
                                                       $sender1 = get_data_id_data("users","id", $value['sender_id']);
                                                       $display_name = $sender1['full_name'];
                                                    }
                                                    else{
                                                      $sender1 = get_data_id_data("users","id", $value['receiver_id']);
                                                      $display_name = $sender1['full_name'];
                                                    }

                                                    echo '<div style="padding: 10px;border-bottom: solid 1px #f6f6f6"><a href="mesages.php?message_unique_id='.$value['message_unique_id'].'"><h5 style="color:#'.$color.'"> '.$dax.' '.$display_name.' <span style="font-size:13px;color:#888">('.$stuff_data['listing_title'].')</span>  <span style="font-size:12px;color:#999;float:right">'.$value['date'].'</span></h5></a>';
                                                    echo '<p style="font-size:14px;color:#999;line-height:16px;">'.substr($value['message'], 0,100).'...</p></div>';
                                                    $i++;
                                                }
                                             ?>
                                           
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="page-content" style="padding: 20px;clear: both;">
                                            <?php 
                                                if (isset($_REQUEST['message_unique_id'])) {
                                                   $message_unique_id = $_REQUEST['message_unique_id'];
                                               }
                                               $data = get_data_id_data("message", "message_unique_id", $message_unique_id);
                                               $sender_data =  get_data_id_data("users", "id", $data['sender_id']);
                                               $stuff_data =  get_data_id_data("my_stuff", "id", $data['stuff_id']);
                                             ?>
                                            <h4 style="color: #fb484e">Conversation History for <a target="_blank" href="list_details.php?81f890e3c2d532abf67f3151939c52cd=<?php echo $data['stuff_id']; ?>"><span style="color: #999"><?php echo $stuff_data['listing_title']; ?> </span></a></h4><hr/>
                                            <div style="padding: 10px;"></div>
                                            <div id="message_area">
                                                <?php 
                                               try {
                                                    $stmt = $pdo->prepare('SELECT * FROM `chat` WHERE `message_unique_id`="'.$message_unique_id.'"  ORDER BY date ASC ');
                                                } catch(PDOException $ex) {
                                                    echo "An Error occured!";
                                                    print_r($ex->getMessage());
                                                }
                                                $stmt->execute();
                                                $user = $stmt->fetchAll();

                                                
                                               // print_r($sender_data);

                                                foreach ($user as $key => $value) {
                                                   if ($value['to_id']==$pdo_auth['id']) {
                                                    $daxa = "";
                                                      if (strpos($value['message'], 'Paid Successfully...') !== false) {
                                                             echo '<div class="your" style="margin-bottom: 20px;float: right;width: 70%">
                                                                  <img src="check-circle.gif" style="width:60px;" />
                                                                <div style="padding: 30px;border-radius: 9px;background-color: #cddc39;font-size: 15px;">
                                                                   <b style="font-weight:bold;font-family:arial;color:#0c7f80">You</b><br/>'.$value['message'].'
                                                                   <div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                                                                </div>
                                                                <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;text-align: right;">'.$value['date'].'</div>

                                                            </div><div style="padding:0px;clear: both;"></div>';
                                                      }
                                                       else{
                                                        echo '<div class="your" style="margin-bottom: 20px;float: right;width: 70%">
                                                                <div style="padding: 10px;border-radius: 9px;background-color: #ffefed;font-size: 15px;">
                                                                   <b style="font-weight:bold;font-family:arial;color:#0c7f80">You</b><br/>'.$value['message'].'
                                                                   <div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                                                                </div>
                                                                <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;text-align: right;">'.$value['date'].'</div>

                                                            </div><div style="padding:0px;clear: both;"></div>';
                                                       }
                                                   }else{
                                                    $sender_data33 =  get_data_id_data("users", "id", $value['to_id']);
                                                     if (strpos($value['message'], 'Paid Successfully...') !== false) {
                                                      echo '<div class="his" style="margin-bottom: 20px;float: left;width: 70%">
                                                       <img src="check-circle.gif" style="width:60px;" />
                                                            <div style="padding: 30px;border-radius: 9px;background-color: #cddc39;font-size: 15px;">
                                                            <b style="font-weight:bold;font-family:arial;color:#0c7f80">'.$sender_data33['full_name'].'</b><br/>
                                                               '.$value['message'].'<div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                                                            </div>
                                                            <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;">'.$value['date'].'</div>
                                                        </div><div style="padding:0px;clear: both;"></div>';
                                                     }
                                                    else{
                                                      echo '<div class="his" style="margin-bottom: 20px;float: left;width: 70%">
                                                            <div style="padding: 10px;border-radius: 9px;background-color: #dfffff;font-size: 15px;">
                                                            <b style="font-weight:bold;font-family:arial;color:#0c7f80">'.$sender_data33['full_name'].'</b><br/>
                                                               '.$value['message'].'<div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                                                            </div>
                                                            <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;">'.$value['date'].'</div>
                                                        </div><div style="padding:0px;clear: both;"></div>';
                                                    }
                                                   }
                                                }
                                                //mark_read($message_unique_id );

                                             ?>
                                            </div>
                                            <div style="padding:20px;clear: both;"></div>
                                            <hr/>
                                            <input type="hidden" id="message_unique_id" value="<?php echo $message_unique_id; ?>">
                                            <div>
                                                <textarea class="form-control" id="message" placeholder="Enter your Message"></textarea>
                                                <div style="padding: 10px;"></div>
                                                <button class="btn btn-primary btn-icon-right" id="dolce">Send Message</button>
                                                <?php 
                                                     if ($fata['receiver_id']==$pdo_auth['id']) {
                                                       if($rafa['stripeToken']==""){
                                                      echo '<button class="btn btn-info btn-icon-right" data-toggle="modal" data-target="#myModal" style="float: right;background-color: #e04867" id="molce">Finalize</button>';
                                                    }else{
                                                      echo '<button class="btn btn-info btn-icon-right" disabled style="float: right;background-color: #e04867" id="molce">Payment Already Processed</button>';
                                                    }
                                                     }

                                                     // echo $rafa['receiver_id'];
                                                     // echo $pdo_auth['id'];
                                                 ?>
                                                 
                                                <div style="float: right;">
                                                <?php 
                                                 // echo $fata['sender_id']."<br/>";
                                                 // echo $pdo_auth['id'];
                                                if (isset($fata['message_unique_id'])) {
                                                   if ($fata['sender_id']==$pdo_auth['id']) {
                                                    //echo '<button class="btn btn-success btn-icon-right" style="float: right;">Accept Proposal</button>';
                                                    if ($fata['price']!="") {
                                                      if($rafa['stripeToken']==""){
                                                        echo '<form action="charge.php" method="post">
                                                              <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                                      data-key="'.$stripe['publishable_key'].'"
                                                                      data-description="Access for a year"
                                                                      data-amount="'.($value['price_proposed']*100).'"
                                                                      data-locale="auto"></script>
                                                                      <input type="hidden" name="msg_uniq_id" value="'.$message_unique_id.'" />
                                                                      <input type="hidden" name="amount" value="'.($value['price_proposed']).'" />
                                                            </form>';
                                                      }
                                                      
                                                    }
                                                      }
                                                 } ?>
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

    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Finalize the Price</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action="price_finalize.php" method="POST">
            <div class="form-group">
              <input type="text" name="price_offered" class="form-control" placeholder="Enter Price you want to offer" required="">
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Enter Message if any" required=""></textarea>
            </div>

            <input type="hidden" name="stuff_id" value="5">
            <input type="hidden" name="message_unique_id" value="<?php echo $rafa['message_unique_id']; ?>">
            <input type="hidden" name="seller_id" value="<?php echo $rafa['receiver_id'];  ?>">
            <input type="submit" class="btn btn-primary btn-icon-right" value="Finalize Price">
          </form>
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

        $(function(){
          $("#dolce").click(function(){
           var message = $("#message").val();
           if (message_unique_id=="") {alert("Message Id cant be blank"); return false;}
           if (message=="") {alert("Message cant be blank"); return false;}
           var message_unique_id = $("#message_unique_id").val();
            $("#message_area").load("load_messages.php", {'message':message, 'message_unique_id':message_unique_id}, function(){
                $("#message").val('');
            });
        });
    });
       
    </script>
</body>

</html>