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
    <title>Update Dog Images | Dog Keeper</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="../vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../vendors/slick/slick.css">
    <link rel="stylesheet" href="../vendors/animate.css">
    <link rel="stylesheet" href="../vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
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
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column justify-content-center" style="min-height: 700px">
                           
                            <div class="d-flex two-column mb-13 mx-n3">
                                <div class="page-left mb-6 px-3">
                                    
                                    <div style="padding: 20px;" class="px-3">
                                        <?php see_status($_REQUEST); ?>
                                           <div style="padding: 20px;background-color: #fff;width:100%;min-height: 600px">
                                               <div class="row">
                                                   <div class="col-sm-8">
                                                    <?php $fad = get_data_id_data("my_dog", "uniq_id", $_REQUEST['uniq_id']); ?>
                                                        <h5>Update images <a href="update_dogs.php?id=<?php echo $fad['id']; ?>" class="btn btn-sm btn-primary">Back to Product</a> </h5><hr/>
                                                        <div style="padding: 10px;"></div>

                                                       <div id="bava">
                                                            <table  style="color: #333;font-size: 13px;width:100%" class="table table-striped table-hover">
                                                          <thead>
                                                             <tr>
                                                               <th>S.No</th>
                                                               <th>Image</th>
                                                               <th>date</th>
                                                               <th>Action</th>                              
                                                             </tr>
                                                          </thead>
                                                          <tbody>
                                                          <?php 
                                                          try {
                                                                $stmt = $pdo->prepare('SELECT * FROM `uploaded_files` WHERE `uniq_id`="'.$_REQUEST['uniq_id'].'" ORDER BY date DESC');
                                                                //echo 'SELECT * FROM `uploaded_files` WHERE `uniq_id`="'.$_REQUEST['uniq_id'].'" ORDER BY date DESC';
                                                            } catch(PDOException $ex) {
                                                                echo "An Error occured!"; 
                                                                print_r($ex->getMessage());
                                                            }
                                                            $stmt->execute();
                                                            $user = $stmt->fetchAll();   
                                                            $i=1; 
                                                            foreach($user as $key=>$value){     
                                                            echo '<tr>
                                                                    <td>'.$i.'</td>
                                                                    <td><img src="uploaded_data/thumb/'.$value['file'].'" style="width:50px;" /></td>
                                                                    <td>'.$value['date'].'</td>
                                                                    <th><a href="delete_uploaded_file.php?id='.$value['id'].'&uniq_id='.$value['uniq_id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');"><button class="btn btn-danger btn-sm">Delete</button></a>  </th>                        
                                                                </tr>';
                                                                $i++;
                                                            }           
                                                          ?>                    
                                                        </tbody>
                                                      </table>
                                                       </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                    <div style="padding: 20px;"></div>
                                                       <label style="font-weight: bold;">Drag and Drop Image Here (Max Size 5MB) </label>
                                                            <div id="myDrop" class="dropzone" style="background-image: url(sed.jpg);background-size: cover;background-position: center;border:solid 1px #ddd;height: 280px">
                                                                  <div class="dz-default dz-message"></div>
                                                            </div>
                                                            <div style="padding: 10px"></div>
                                                   </div>
                                               </div>
                                                
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
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>    
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
            $(document).ready(function(){
              $('#myDrop').dropzone({
                url: 'post.php', method: 'post', addRemoveLinks: false,
                success : function(file, response){
                    $("#bava").load("dharma.php?userName=<?php echo $_REQUEST['uniq_id']; ?>");
                },
                sending: function(file, xhr, formData){
                    formData.append('userName', '<?php echo $_REQUEST['uniq_id']; ?>');
                }
              });
            });
    </script>
    <?php include 'svg.php'; ?>
</body>

</html>