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
    <title>My Community | Dog Keeper</title>
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
                                    <div class="col-lg-7">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e;text-transform: capitalize;">List of Events </h4>
                                           <hr/>
                                           <div style="padding: 15px;">
                                               <div class="row">
                                                <?php $dara = fetch_all_popo("my_community");
                                               // print_r($dara);
                                                foreach ($dara as $key => $value) {
                                                    echo '<div class="col-lg-12"><div style="padding: 10px 0px;"></div>
                                                               <a href="event_details.php?81f890e3c2d532abf67f3151939c52cd='.$value['id'].'" class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1"><span class="letter-spacing-25">'.$value['title'].' <span style="font-size:12px;"> (Event)</span></span> </a>
                                                                <div  style="float:right;"><b style="font-weight: bold;font-family: arial;color:#19bdbd">Date : </b> '.$value['event_date'].'</div>
                                                                <div style="clear: both;"></div>
                                                                <div style="font-size: 14px;">
                                                                   '.substr(strip_tags($value['desc']), 0,200).'
                                                                </div>
                                                                <div><b style="font-weight: bold;font-family: arial;color:#19bdbd">Location : </b> '.$value['location'].'</div>
                                                                <div style="padding: 10px 0px;border-bottom: solid 1px #eee;"></div>
                                                           </div>';
                                                }
                                                 ?>
                                                   
                                               </div>
                                           </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="page-content" style="padding: 20px;">
                                            <h4 style="color: #fb484e">My Community Map </h4><hr/>
                                            <div style="padding: 10px;"></div>
                                            <!-- Google Map Here -->
                                            <div id="map" style="width:100%;height:800px;"></div>
                                        </div>
                                    </div>
                                </div>
                            <div class="mt-5"> © 2020 myproperdeets. All Rights Reserved.</div>
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
   
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKFd5JFhv7xyXhRUBP8duWtYiTRl1tKVY&callback=initMap">
        </script>
    <script type="text/javascript" >
        function initMap() {
                  var center = {lat: 41.3071106, lng: -72.9234992};
                  var locations = [
                    <?php foreach ($dara as $key => $value) {
                        $data = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($value['address']).'&key=AIzaSyCKFd5JFhv7xyXhRUBP8duWtYiTRl1tKVY&sensor=false)');                        
                        $data = json_decode($data,true);
                        echo '[\''.$value['address'].'\',   '.$data['results'][0]['geometry']['location']['lat'].', '.$data['results'][0]['geometry']['location']['lng'].'],';
                    } ?>                    
                   
                  ];
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom:5,
                    center: center
                  });
                var infowindow =  new google.maps.InfoWindow({});
                var marker, count;
                for (count = 0; count < locations.length; count++) {            

                    marker = new google.maps.Marker({
                      position: new google.maps.LatLng (locations[count][1], locations[count][2]),
                      map: map,
                      title: locations[count][0]
                    });
                google.maps.event.addListener(marker, 'click', (function (marker, count) {
                      return function () {
                        infowindow.setContent(locations[count][0]);
                        infowindow.open(map, marker);
                      }
                    })(marker, count));
                  }
                }


        </script>


</body>

</html>