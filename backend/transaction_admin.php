<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    if($pdo_auth['email']!="admin@dogkeeper.com"){
        header('Location:dashboard.php?choice=success&value=No Such Page present.');
        exit();
    }
     ?>
    
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Transactions | Dog Keeper</title>
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
        td,th{padding: 10px !important;}
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
                                    
                                    <div style="padding: 20px;" class="px-3">
                                        <?php see_status($_REQUEST); ?>
                                           <div style="padding: 20px;background-color: #fff;width:100%;min-height: 600px">
                                                <h5>View Token Transactions Requests </h5><hr/>
                                                <div style="padding: 10px;"></div>

                                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                                                   width="100%" style="color: #333">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th>Type</th>
                                                    <th>Username</th>
                                                    <th>To Froms</th>
                                                    <th>Token Amount</th>
                                                    <th>Direction </th>                   
                                                  </tr>
                                                </thead>
                                                <tbody>
                                               <?php 
                                                   
                                                    try {
                                                        $stmt = $pdo->prepare('SELECT * FROM `transfer`  ORDER BY date DESC');
                                                       
                                                    } catch(PDOException $ex) {
                                                        echo "An Error occured!"; 
                                                        print_r($ex->getMessage());
                                                    }
                                                    $stmt->execute();
                                                    $user = $stmt->fetchAll();
                                                    $i=1;
                                                    foreach ($user as $key => $value) {
                                                        
                                                          $statys = '<label class="label label-info" style="color:#fff;background-color:#333;padding:2px 5px;">'.$value['process'].'</label>';
                                                       
                                                      echo ' <tr>
                                                              <td>'.$i.'</td>
                                                               <td><label class="">DOG Keeper Token (DT)</label></td>
                                                               <td>'.$pdo_auth['full_name'].'</td>
                                                              <td><b>To : </b>'.$value['to'].'<br/> <b>from : </b> '.$value['from'].'<br/><label class="label label-success">'.$value['tx_address'].'</label> </td>
                                                              <td>'.round($value['tokens'],2).'</td>
                                                              <td>'.$statys.' <br/> '.$value['date'].'</td>                                                              
                                                            </tr>';
                                                            $i++;
                                                    }
                                                   ?>          
                                                </tbody>
                                            </table>
                                                
                                                <div style="padding: 20px;"></div>
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