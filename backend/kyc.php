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
    <title>KYC | Dog Keeper</title>
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
            <h4 style="color: #fb484e">My Documents : <span style="color: #aaa;font-weight: normal;">KYC (Know Your Customers)</span>  </h4><hr/>
            <div style="padding: 10px;"></div>
           
            <?php  see_status($_REQUEST); ?>
            <div class="row">               

                <div class="col-xl-4 col-xs-12">
                    <div class="card-box items">
                      <div style="padding:10px"></div>               
                        <div class="century" style="font-size: 20px;color: #333"> Upload Your KYC Documents</div>
                        <div class="century" style="font-size: 13px;color: #222">You Must Upload a Government Authorised Dog Care Taker Certificate  <b style="color: red">Document</b> For Taking Dog Related Services</div>
                        <div style="padding:20px"></div>
                       <center>
                         <form method="POST" action="kyc_handle.php" enctype="multipart/form-data">
                           <div class="form-group">
                              <input type="text" class="form-control" required="" value="<?php echo $pdo_auth['full_name']; ?>" name="name" placeholder="Enter Your Name">
                           </div>
                           

                           <div class="form-group">
                              <input type="text" class="form-control" readonly name="email" value="<?php echo $pdo_auth['email']; ?>" placeholder="Enter Your Email Id">
                           </div>
                           

                            <div class="form-group">
                              <input type="text" class="form-control" name="tx_address" readonly="" value="<?php echo $pdo_auth['tx_address']; ?>" placeholder="Enter ETH Address">
                           </div>
                           

                            <div class="form-group">
                              <input type="file" class="form-control" name="file" placeholder="Upload Your Original KYC Document">
                           </div>
                           

                           <button class="btn btn-primary btn-lg" style="width: 100%" type="sumbit" name="submit" >UPLOAD YOUR DOCUMENTS</button>
                         </form>
                       </center>
                       
                   </div>
                </div><!-- end col-->


                <div class="col-xl-4 col-xs-12">
                    <div class="card-box items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">KYC Documents </h3>
                         <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                               <th>S.No.</th>
                               <th>Document</th>
                               <th>Status</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `kyc` WHERE `user_id`="'.$pdo_auth['id'].'"  ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();   
                              $i=1; 
                              foreach($user as $key=>$value){
                                  $statys = '<label class="badge badge-warning">Pending</label>';
                                  if($value['status']!="Pending"){
                                  $statys = '<label class="badge badge-success">Approved</label>';
                                }

                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td><a target="_blank" href="kyc_documents/'.$value['file'].'" style="color:#555;text-decoration:underline">Document'.$i.'</a></td>
                                    <td>'.$statys.'</td>                              
                                  </tr>';
                                  $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                </div><!-- end col-->

                 <div class="col-xl-4 col-xs-12">
                    <div class="card-box items">
                      <div style="padding: 10px;"></div>
                       <div class="century" style="font-size: 20px;color: orange"> KYC Documents Rules</div>
                          <div class="century" style="font-size: 15px;color: #848d98">Know Your Customer - KYC enables DogKeeper to know/ understand their customers and their financial dealings, to be able to serve them better and manage its risks prudently.</div>

                          <hr/>
                          <h3 style="color: orange;font-size:20px;">Purpose : </h3>
                          <ul style="color: #848d98;text-align:left;font-sixe:10px;">
                            <li>Verify the legal status of the legal person/ entity</li>
                            <li>Verify identity of the authorized signatories and</li>
                            <li>Verify identity of the Beneficial owners/ controllers of the account</li></li>
                          </ul>

                          <h3 style="color: orange;font-size:20px;">What can be used</h3>
                          <ul style="color: #848d98;text-align:left;">
                            <li>Dog Adoption Certificate</li>
                            <li>Voter's Identity Card</li>
                            <li>Driving Licence</li>
                            <li>Citizen Card</li>
                            <li>Account Number Card</li>

                          </ul>
                          <div style="padding:20px"></div>
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