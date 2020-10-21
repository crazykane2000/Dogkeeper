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
    <title> Stuff Available | Dog Keeper</title>
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
    <div class="page-content-wrapper d-flex flex-column">
        <h1 class="font-size-h4 mb-4 font-weight-normal">Stuff Available</h1>
        <div class="page-content" style="padding: 40px;">
            <?php see_status($_REQUEST); ?>
            <div style="padding: 10px;background-color: #f6f6f6">
                <form action="search_handle.php" method="POST">
                    <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="searcher" class="form-control" placeholder="Ex: Dog Bathing, Dog Grooming" list="hgy">
                    </div>

                    <div class="col-sm-4">
                        <select class="form-control " required="" name="location">
                                         <datalist id="browsers">
                                            <option value="">Select by County</option>
                                                <option value="" selected="">All Places</option>
                                                  <optgroup label="Connecticut">
                                                    <option>Fairfield</option>
                                                    <option>Hartford</option>
                                                    <option>Litchfield</option>
                                                    <option>Middlesex</option>
                                                    <option>New Haven</option>
                                                    <option>New London</option>
                                                    <option>Tolland</option>
                                                    <option>Windham</option>
                                                  </optgroup>
                                                  <optgroup label="New York">
                                                    <option>Albany</option>
                                                    <option>Allegany</option>
                                                    <option>Bronx</option>
                                                    <option>Broome</option>
                                                    <option>Cattaraugus</option>
                                                    <option>Cayuga</option>
                                                    <option>Chautauqua</option>
                                                    <option>Chemung</option>
                                                    <option>Chenango</option>
                                                    <option>Clinton</option>
                                                    <option>Columbia</option>
                                                    <option>Cortland</option>
                                                    <option>Delaware</option>
                                                    <option>Dutchess</option>
                                                    <option>Erie</option>
                                                    <option>Essex</option>
                                                    <option>Franklin</option>
                                                    <option>Fulton</option>
                                                    <option>Genesee</option>
                                                    <option>Greene</option>
                                                    <option>Hamilton</option>
                                                    <option>Herkimer</option>
                                                    <option>Jefferson</option>
                                                    <option>Kings</option>
                                                    <option>Lewis</option>
                                                    <option>Livingston</option>
                                                    <option>Madison</option>
                                                    <option>Monroe</option>
                                                    <option>Montgomery</option>
                                                    <option>Nassau</option>
                                                    <option>New York</option>
                                                    <option>Niagara</option>
                                                    <option>Oneida</option>
                                                    <option>Onondaga</option>
                                                    <option>Ontario</option>
                                                    <option>Orange</option>
                                                    <option>Orleans</option>
                                                    <option>Oswego</option>
                                                    <option>Otsego</option>
                                                    <option>Putnam</option>
                                                    <option>Queens</option>
                                                    <option>Rensselaer</option>
                                                    <option>Richmond</option>
                                                    <option>Rockland</option>
                                                    <option>Saint Lawrence</option>
                                                    <option>Saratoga</option>
                                                    <option>Schenectady</option>
                                                    <option>Schoharie</option>
                                                    <option>Schuyler</option>
                                                    <option>Seneca</option>
                                                    <option>Steuben</option>
                                                    <option>Suffolk</option>
                                                    <option>Sullivan</option>
                                                    <option>Tioga</option>
                                                    <option>Tompkins</option>
                                                    <option>Ulster</option>
                                                    <option>Warren</option>
                                                    <option>Washington</option>
                                                    <option>Wayne</option>
                                                    <option>Westchester</option>
                                                    <option>Wyoming</option>
                                                    <option>Yates</option>
                                                  </optgroup>
                                                  <optgroup label="New Jersey">
                                                    <option>Atlantic</option>
                                                    <option>Bergen</option>
                                                    <option>Burlington</option>
                                                    <option>Camden</option>
                                                    <option>Cape May</option>
                                                    <option>Cumberland</option>
                                                    <option>Essex</option>
                                                    <option>Gloucester</option>
                                                    <option>Hudson</option>
                                                    <option>Hunterdon</option>
                                                    <option>Mercer</option>
                                                    <option>Middlesex</option>
                                                    <option>Monmouth</option>
                                                    <option>Morris</option>
                                                    <option>Ocean</option>
                                                    <option>Passaic</option>
                                                    <option>Salem</option>
                                                    <option>Somerset</option>
                                                    <option>Sussex</option>
                                                    <option>Union</option>
                                                    <option>Warren</option>
                                                  </optgroup>
                                                </datalist>
                                    </select>
                    </div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-icon-right">Search  Listing <i class="far fa-angle-right"></i></button>
                    </div>
                </div>
                </form>
            </div>
            <div style="padding-bottom: 40px;"></div>
            <div class="tab-content"  style="min-height: 700px">
                <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="store-listing-style-04">
                        <?php 
                            try {
                                $stmt = $pdo->prepare('SELECT * FROM `my_stuff` WHERE `uploaded_by_id` <> "'.$pdo_auth['id'].'"  ORDER BY date DESC');
                            } catch(PDOException $ex) {
                                echo "An Error occured!"; 
                                print_r($ex->getMessage());
                            }
                            $stmt->execute();
                            $user = $stmt->fetchAll();   
                            $i=1; 
                            $status ="active";
                            $type='<span class="badge badge-success d-inline-block mr-1">Sell</span>';
                            foreach($user as $key=>$value){  
                                $image_file = get_data_id_data("uploaded_files", "uniq_id", $value['uniq_id']);
                                //print_r($image_file);
                                if ($value['status']=="Rented") {
                                    $status = "pending";
                                }else if ($value['status']=="Sold") {
                                     $status = "experied";
                                }else{
                                    $status ="active";
                                }
                                if ($value['type']=="Rent") {
                                    $type = '<span class="badge badge-info d-inline-block mr-1">Rent</span>';
                                }
                                echo '<div class="store-listing-item">
                                        <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                                            <div class="store media align-items-stretch py-4"> <a href="list_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="store-image"> <img src="uploaded_data/thumb/'.$image_file['file'].'" alt="Favourite 1"> </a>
                                                <div class="media-body px-0 pt-4 pt-md-0"> <a href="list_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1"><span class="letter-spacing-25">'.$value['listing_title'].' <span style="font-size:12px;"> ('.$value['category'].')</span></span> </a>
                                                    <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">                                                       
                                                       <li class="list-inline-item">'.$type.'<span class="number">4 rating</span></li>
                                                        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$'.$value['price'].' <span style="color:#333;font-weight:normal">('.$value['price_type'].')</span></span></li>
                                                                                                            
                                                    </ul>
                                                    <div class="border-top pt-2 d-flex"> <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span> <a href="location_ads.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="text-secondary text-decoration-none address">'.$value['location'].'</a>
                                                    <div class="ml-0 ml-sm-auto" style="margin-left:100px !important;"> <span class="label">Status:</span> <span class="status '.$status.'">'.$value['status'].'</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="width:200px !important;font-size:13px" class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto"> '.substr($value['description'], 0,100).'..
                                            </div>

                                            <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto">
                                                <button class="btn btn-sm btn-primary dara fadac" data-stuff_id="'.$value['id'].'"  data-seller="'.$value['uploaded_by_id'].'"  data-toggle="modal"  data-target="#myModal2" style="zoom:100%">Message</button>

                                                <a href="list_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'"><button class="btn btn-sm btn-danger" style="zoom:100%;background: linear-gradient(180deg, #ff5e5e, #ff5e5e) repeat-x; !important">View </button></a>
                                            </div>
                                        </div>
                                    </div>';
                            }   
                         ?>
                        
                        
                    </div>
                   <!--  <ul class="pagination pagination-style-02">
                        <li class="page-item"><a href="#" class="page-link bg-gray"><i class="fal fa-chevron-left"></i></a></li>
                        <li class="page-item"><a href="#" class="page-link current bg-gray">1</a></li>
                        <li class="page-item"><a href="#" class="page-link bg-gray">2</a></li>
                        <li class="page-item"><a href="#" class="page-link bg-gray">3</a></li>
                        <li class="page-item"><a href="#" class="page-link bg-gray">...</a></li>
                        <li class="page-item"><a href="#" class="page-link bg-gray">5</a></li>
                        <li class="page-item"><a href="#" class="page-link bg-gray"><i class="fal fa-chevron-right"></i></a></li>
                    </ul> -->
                </div>
                <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="active-tab">
                    <div class="store-listing-style-04">
                        <?php 
                            try {
                                $stmt = $pdo->prepare('SELECT * FROM `my_stuff` WHERE `status`="Active" AND   `uploaded_by_id`="'.$pdo_auth['id'].'"   ORDER BY date DESC');
                                //echo 'SELECT * FROM `my_stuff` WHERE `status`="Active" AND   `uploaded_by`="'.$pdo_auth['id'].'"   ORDER BY date DESC';
                            } catch(PDOException $ex) {
                                echo "An Error occured!"; 
                                print_r($ex->getMessage());
                            }
                            $stmt->execute();
                            $user = $stmt->fetchAll();   
                            $i=1; 
                            $status ="active";
                             $type='<span class="badge badge-success d-inline-block mr-1">Sell</span>';
                            foreach($user as $key=>$value){  
                                $image_file = get_data_id_data("uploaded_files", "uniq_id", $value['uniq_id']);
                                //print_r($image_file);
                                if ($value['status']=="Rented") {
                                    $status = "pending";
                                }else if ($value['status']=="Sold") {
                                     $status = "experied";
                                }else{
                                    $status ="active";
                                }
                                if ($value['type']=="Rent") {
                                    $type = '<span class="badge badge-info d-inline-block mr-1">Rent</span>';
                                }
                                echo '<div class="store-listing-item">
                                        <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                                            <div class="store media align-items-stretch py-4"> <a href="list_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="store-image"> <img src="uploaded_data/thumb/'.$image_file['file'].'" alt="Favourite 1"> </a>
                                                <div class="media-body px-0 pt-4 pt-md-0"> <a href="list_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1"><span class="letter-spacing-25">'.$value['listing_title'].'<span style="font-size:12px;"> ('.$value['category'].')</span></span> </a>
                                                    <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                                                    <li class="list-inline-item">'.$type.'<span class="number">4 rating</span></li>                                                       
                                                       <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$'.$value['price'].'</span></li>
                                                        <li class="list-inline-item separate"></li>
                                                        <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary"> <svg class="icon icon-cog"> <use xlink:href="#icon-cog"></use> </svg> <span>'.$value['price_type'].'</span> </a></li>                                                        
                                                    </ul>
                                                    <div class="border-top pt-2 d-flex"> <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt"> </i> </span> <a href="location_ads.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="text-secondary text-decoration-none address">'.$value['location'].'</a>
                                                    <div class="ml-0 ml-sm-auto"> <span class="label">Status:</span> <span class="status '.$status.'">'.$value['status'].'</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto"> <a href="update_listing.php?id='.$value['id'].'" class="btn btn-light btn-icon-left mb-2 mb-sm-0 font-size-md"> <i class="fal fa-edit"></i> Edit </a> <a href="delete_listing.php?id='.$value['id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');" class="btn btn-primary btn-icon-left mb-2 mb-sm-0 px-5 font-size-md"> <i class="fal fa-trash-alt"></i> Delete </a></div>
                                        </div>
                                    </div>';
                            }   
                         ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="mt-5"> © 2020 Myproperdeets. All Rights Reserved.</div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'login_popup.php'; ?>

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
          $(".fadac").click(function(){
           var id = $(this).data("seller");
           var stuff_id = $(this).data("stuff_id");
            $("#lokj_manage_account").load("load_seller_message.php", {'seller_id':id, 'stuff_id':stuff_id});
        });
    });
       
    </script>
</body>

</html>