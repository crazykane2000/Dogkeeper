 <?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
   
     ?>  
     
     <?php $id = ''; if ($pdo_auth['email']=="admin@dogkeeper.com") {
        $id = '';
    }else{
        $id = 'WHERE `uploaded_by_id`="'.$pdo_auth['id'].'"';
    } ?>
    
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUY Dog Tokens | Dog Keeper</title>
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
        td{padding: 10px !important;}
    </style>
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
        
            <div class="page-content" style="padding: 40px;">
            <h4 style="color: #fb484e">Buy <span style="color: #aaa;font-weight: normal;">Dog Tokens</span>  </h4><hr/>
            <div style="padding: 10px;"></div>
           
            <?php  see_status($_REQUEST); ?>
            <div class="row">               

                <div class="col-xl-8 col-xs-3">
                    <div class="card-box items">
                       <ul class="nav nav-tabs m-b-10" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Buy Via Wire Transfer</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Buy Via Wire Bitcoin</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="gatar-tab" data-toggle="tab" href="#gatar" role="tab" aria-controls="gatar" aria-expanded="false">Buy Via Wire Ethereum</a>
                          </li>
                          <div style="padding: 10px;text-align: left;">
                                  <h3 style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 24px;">Bank WIRE Transfer</h3>
                                  <hr style="opacity: .1" />
                                  <p style="font-family: 'Didact Gothic', sans-serif;color: #3445bf;font-size: 16px;"><b>Min. 10,000 USD and Max 50,000,000 USD</b></p>
                                  <p style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 16px;font-weight: bold;">Processing Time : 1 to 5 Working Days</p>
                                  <hr style="opacity: .1" />
                                  <table class="table table-hover table-striped">
                                      <thead>
                                          <tr style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 12px;">
                                              <td>Company </td>
                                              <td style="text-transform: uppercase;"><?php echo wallet_names(); ?> CORPORATION LIMITED</td>
                                          </tr>
                                      </thead>
                                      <tbody style="font-size: 12px;">
                                          <tr>
                                              <td>Company Address</td>
                                              <td>Crystal Design Center (CDC), 1448/4, J2 Building, 2nd Floor Suite 201-203, Ladprao 87 Pradit Manutham Rd. , Klongchan Bangkapi, Bangkok Thailand 10240</td>
                                          </tr>
                                          <tr style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 12px;">
                                              <td>Bank Address</td>
                                              <td>NO. 1 QUEEN'S ROAD CENTRAL HONG KONG </td>
                                          </tr>
                                          <tr>
                                              <td>Bank Name</td>
                                              <td>HSBC HONG KONG</td>
                                          </tr>
                                          <tr style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 12px;">
                                              <td>Account No. </td>
                                              <td>787896789698765487658764785647386534</td>
                                          </tr>
                                          <tr>
                                              <td>SWIFT Code. </td>
                                              <td>8756745675675GGJHFGHN</td>
                                          </tr>
                                      </tbody>
                                  </table>

                                  <hr style="opacity: .1" />
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal22">Deposit Amount</button>
                              </div>
                   </div>
                </div><!-- end col-->


                <div class="col-xl-4 col-xs-3">
                    <div class="card-box items" style="min-height: 580px">

                        <h4 class="header-title m-t-0 m-b-20">RECENT <?php echo token_names(); ?> Transactions</h4>
                          <table class="table table-striped table-hover">
                            <thead  style="font-family: 'Didact Gothic', sans-serif;color: #ddd;font-size: 16px;">
                               <tr>
                                 <th>S.No.</th>
                                 <th>Amount</th>
                                 <th>Tokens</th>
                                 <th>Status</th>
                               </tr>
                            </thead>
                            <tbody>
                              <?php 
                              try {
                                    $stmt = $pdo->prepare('SELECT * FROM `buy_token` WHERE `user_id`="'.$pdo_auth['id'].'" ORDER BY date DESC');
                                } catch(PDOException $ex) {
                                    echo "An Error occured!"; 
                                    print_r($ex->getMessage());
                                }
                                $stmt->execute();
                                $user = $stmt->fetchAll();   
                                $i=1; 
                                foreach($user as $key=>$value){
                                    $statys = '<label class="label label-danger">Pending</label>';
                                    if($value['status']!="Pending"){
                                    $statys = '<label class="label label-success">Approved</label>';
                                  }

                                  echo '<tr>
                                      <td>'.$i.'</td>
                                      <td title="'.$value['tx_address'].'">'.$value['amount']." ".$value['currency'].'</td>
                                      <td>'.round($value['no_of_tokens'],2).'</td>
                                      <td>'.$statys.'</td>                              
                                    </tr>';
                                    $i++;
                              }           
                            ?>                    
                          </tbody>
                     </table>
                    </div>
                </div><!-- end col-->


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

    <div id="myModal22" class="modal fade" role="dialog">
        <div class="modal-dialog">
           <?php    
            $btc = file_get_contents("https://blockchain.info/tobtc?currency=USD&value=1");
            $price_bbt = get_data_id("entrc_price");
            $data = json_decode($btc, TRUE);
           // print_r($price_bbt);
            //print_r($btc);
            $btc = 1/$btc;
            echo $btc;
            $price_bbt = $price_bbt['price'];
            //echo $price_bbt;

            $no_of_bbt_by_btc = ($btc/$price_bbt);            
        ?>

          <!-- Modal content-->
          <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Please Enter Details</h4>
              <p>1 <?php echo token_names(); ?> = <?php echo round($price_bbt,2); ?> USD</p>
            </div>
            <div class="modal-body">
             <form action="buy_handle.php" method="POST">
               <div style="padding: 30px;">
                 <div class="form-group">
                   <label>Enter Amount</label>
                   <input type="text" name="amount" id="amty" value="000" class="form-control" placeholder="Enter Amount Here">
                 </div>
                 <div class="form-group">
                   <label>Total <?php echo token_names(); ?></label>
                   <input type="text" name="bbt" value="000" id="bbty" class="form-control" placeholder="Enter No. of <?php echo token_names(); ?> to Buy">
                 </div>
                 <input type="hidden" name="currency" value="Dollar">

                   <div class="form-group">
                   <label>Enter Transaction Id</label>
                   <input type="text" name="tx_idd" id="tx_idd"  class="form-control" placeholder="Enter Transaction Id Here">
                 </div>


                  <div class="form-group">
                   <button type="submit" class="btn btn-primary" >Request Buy Token </button>
                 </div>
               </div>
             </form>
            </div>
           
          </div>

        </div>
      </div>
    
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