<?php  include 'backend/administrator/connection.php';
   include 'backend/administrator/add_notification_user.php';
   include 'backend/administrator/function.php';
   $pdo = new PDO($dsn, $user, $pass, $opt);
   ?><!doctype html>
<html lang="en">
   <head>
      <?php include 'googleAnalytics.php'; ?>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>FAQ : DogKeeper </title>
      <?php  include 'head.php'; ?>
      <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
      <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
      <link rel="stylesheet" href="vendors/slick/slick.css">
      <link rel="stylesheet" href="vendors/animate.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div id="site-wrapper" class="site-wrapper home-main">
        <header id="header" class="main-header header-float  header-sticky-smart bg-white header-light header-style-01 text-uppercase" >
            <div class="header-wrapper sticky-area" style="color: #777;">
                <?php include 'header.php'; ?>
            </div>
        </header>
         <div id="page-title" class="page-title text-center pt-11">
            <div class="banner" style="background-image: url(images/daxac.jpg);">
                <div class="container">
                    <div class="banner-content text-center" style="padding-top:270px;padding-bottom: 100px">
                        <div class="heading" data-animate="fadeInDown">
                            <h1 class="mb-0 text-gray"> Frequently Asked Questions  </h1> </div>
                            <br/><br/>
                    </div>
                </div>
            </div>
         </div>
         <div class="content-wrap">
            <div id="wrapper-content" class="wrapper-content py-13">
               <div class="container">
                  <div id="section-accordion" class="faqs mb-11">
                     <div class="container">
                        <div class="row">
                            <div class="col-sm-2"></div>
                           <div class="col-md-8">
                              <div class="accordion accordion-style-02" id="accordionExample-01">
                                 <?php $daca = fetch_all_popo("faq");
                                    foreach ($daca as $key => $value) {
                                        echo '<div class="card">
                                                <a href="#collapse'.$value['id'].'" class="card-header d-flex align-items-center text-decoration-none collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapse'.$value['id'].'" id="heading'.$value['id'].'"> <span class="card-title mb-0 text-dark font-weight-semibold font-size-lg pl-0 pr-5">'.$value['question'].' </span> <span class="dynamic-icon"></span> </a>
                                                <div id="collapse'.$value['id'].'" class="collapse " aria-labelledby="heading'.$value['id'].'" data-parent="#accordionExample-01">
                                                    <div class="card-body"> '.$value['answer'].' </div>
                                                </div>
                                            </div>';
                                    }
                                     ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <?php include 'red_patta.php'; ?>
         <?php include 'footer.php'; ?>
      </div>
      <?php include 'popup.php'; ?>
      <script src="vendors/jquery.min.js"></script>
      <script src="vendors/popper/popper.js"></script>
      <script src="vendors/bootstrap/js/bootstrap.js"></script>
      <script src="vendors/hc-sticky/hc-sticky.js"></script>
      <script src="vendors/isotope/isotope.pkgd.js"></script>
      <script src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
      <script src="vendors/slick/slick.js"></script>
      <script src="vendors/waypoints/jquery.waypoints.js"></script>
      <script src="js/app.js"></script>
      <?php include 'svg.php'; ?>
   </body>
</html>