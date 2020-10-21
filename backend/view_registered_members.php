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
    <title>View Registered Members | Dog Keeper</title>
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
                                                <h5>View Registered Members </h5><hr/>
                                                <div style="padding: 10px;"></div>

                                                <table  style="color: #333;font-size: 13px;" class="table table-striped table-hover">
                                                  <thead>
                                                     <tr>
                                                       <th>S.No</th>
                                                       <th>Usertype</th>
                                                        <th>Full Name</th>
                                                       <th>Email</th>
                                                       <th>Password </th>
                                                       <th>Tx Address </th>
                                                       <th>Date </th>
                                                       <th>Action</th>                              
                                                     </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php 
                                                  try {
                                                        $stmt = $pdo->prepare('SELECT * FROM `users`   ORDER BY date DESC');
                                                    } catch(PDOException $ex) {
                                                        echo "An Error occured!"; 
                                                        print_r($ex->getMessage());
                                                    }
                                                    $stmt->execute();
                                                    $user = $stmt->fetchAll();   
                                                    $i=1; 
                                                    foreach($user as $key=>$value){        
                                                    if ($value['email']=="admin@dogkeeper.com") {
                                                       continue;
                                                     }                         
                                                      echo '<tr>
                                                            <td>'.$i.'</td>
                                                            <td><b>'.$value['user_type'].'</b></td>
                                                            <td><label style="background-color:green;color:#fff;padding:3px 6px;border-radius:3px;">'.$value['full_name'].'</label></td>
                                                            <td><label class="label label-primary">'.$value['email'].'</label> </td>
                                                            <td><label class="label label-primary">'.$value['password'].'</label> </td>
                                                           <td>'.$value['tx_address'].'</td>      
                                                           <td>'.$value['date'].'</td>      
                                                            <th><a href="delete_users.php?id='.$value['id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');"><button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button></a> <button data-id="'.$value['id'].'" data-name="'.$value['full_name'].'" class="btn btn-success btn-sm updates_popo" data-toggle="modal" data-target="#updateModal">
                                                              <i class="fal fa-pencil"></i></button></th>                        
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

    <div id="updateModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
           <h4 class="modal-title">Update User</h4>
          </div>
          <div class="modal-body">
            <div class="card-box items">
              <div style="padding:10px"></div>               
                  <form method="POST" action="update_user_handle.php" enctype="multipart/form-data">
                     <div class="form-group">
                        <input type="text" class="form-control" required="" id="name" name="name" placeholder="Enter Your Name or Document Name">
                     </div>
                     <hr/>
                    
                     <input type="hidden" name="id" id="" value="">
                     <button class="btn btn-primary btn-lg" style="width: 100%" type="sumbit" name="submit" >UPLOAD YOUR DOCUMENTS</button>
                   </form>         
             </div>
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
    <script type="text/javascript">
      $(document).ready(function () {
          $(".updates_popo").click(function () {
              $('#name').val($(this).data('name'));
              $('#addBookDialog').modal('show');
          });
      });
    </script>
</body>

</html>