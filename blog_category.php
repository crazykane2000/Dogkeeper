<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';
  $pdo = new PDO($dsn, $user, $pass, $opt); 
    if ($_REQUEST['category']=="") {
        header('Location:blogs.php?choice=erros&value=No Blog Found');
        exit;
    }
    $lata = get_data_col("blog", "category", $_REQUEST['category']);
  //  print_r($lata);
 ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'googleAnalytics.php'; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_REQUEST['category']; ?> | Dog Keeper</title>
    <?php  include 'head.php'; ?>
    <script src="/cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        .banner::after {
            content: '';
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
}


    
    </style>
</head>

<body>
    <div id="site-wrapper" class="site-wrapper page-about">
      <header id="header" class="main-header header-float  header-sticky-smart bg-white header-light header-style-01 text-uppercase" >
            <div class="header-wrapper sticky-area" style="color: #777;">
        <?php include 'header.php'; ?>
      </div>
		</header>
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="banner" style="background-color: #44f3f3;background-image: none;">
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="heading" data-animate="fadeInDown">
                           <h1 class="mb-0 text-black"> <?php echo $_REQUEST['category']; ?>  </h1></div>
                    </div>
                </div>
            </div>
            
            <div class="pt-11 bg-gray-02 pb-9" style="">
                <div class="container">
                     <div class="row">
                               <div class="page-content col-lg-8 mb-8 mb-lg-0">
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0">
                                            <div class="card-body px-0 font-size-lg text-dark pb-0" style="padding: 30px !important;">
                                              <div class="row">
                                                <?php 
                                                  foreach ($lata as $key => $value) {
                                                    echo '<div class="col-md-6 mb-6">
                                                           <div class="card border-0">
                                                              <a href="blog_desc.php?id='.$value['id'].'" class="hover-scale">
                                                              <img src="backend/blogs/thumb/'.$value['file'].'" alt="'.$value['title'].'" class="card-img-top image">
                                                              </a>
                                                              <div class="card-body px-0">
                                                                 <div class="mb-2"><a href="blog_category.php?id='.$value['category'].'" class="link-hover-dark-primary">'.$value['category'].'</a></div>
                                                                 <h5 class="card-title lh-13 letter-spacing-25"><a href="blog_desc.php?id='.$value['id'].'" class="link-hover-dark-primary text-capitalize">'.$value['title'].'</a>
                                                                 </h5>
                                                                 <ul class="list-inline">
                                                                    <li class="list-inline-item mr-0">
                                                                       <span class="text-gray">'.$value['date'].'</span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                       <a href="" class="link-hover-dark-primary">Admin</a>
                                                                    </li>
                                                                 </ul>
                                                              </div>
                                                           </div>
                                                        </div>';
                                                  }
                                                  
                                                 ?>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>

                               <div class="sidebar col-lg-4 primary-sidebar sidebar-sticky">
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0">
                                            <div class="card-body px-0 font-size-lg text-dark pb-0" style="padding: 30px !important;">
                                               <div class="card border-0 mb-7 recent-posts">
                                                   <h3 class="card-title mb-3">Recent Posts</h3>
                                                   <div class="card-body px-0 bg-transparent">
                                                      <ul class="list-group list-group-flush list-group-borderless">
                                                        <?php 
                                                             $blogs = get_data_id_data_alll("blog", 3);
                                                             foreach ($blogs as $key => $value) {
                                                                echo '<li class="list-group-item bg-transparent p-0 mb-4">
                                                                        <a href="blog_desc.php?id='.$value['id'].'" class="font-size-md font-weight-semibold link-hover-dark-primary" style="line-height:15px !important;">'.$value['title'].'</a>
                                                                     </li>';
                                                             }
                                                         ?>                                                         
                                                      </ul>
                                                   </div>

                                                   <hr/>

                                                   <h3 class="card-title mb-3">Category</h3>
                                                   <div class="card-body px-0 bg-transparent">
                                                      <ul class="list-group list-group-flush list-group-borderless">
                                                        <?php 
                                                             $blogs = fetch_all_popo("blog_category");
                                                             foreach ($blogs as $key => $value) {
                                                                $count = get_count_items("blog", "category", $value['blog_category']);
                                                                echo '<li class="list-group-item bg-transparent p-0 mb-4">
                                                                        <a href="blog_category.php?category='.$value['blog_category'].'" class="font-size-md font-weight-semibold link-hover-dark-primary" style="line-height:15px !important;">'.$value['blog_category'].' ('.$count.')</a>
                                                                     </li>';
                                                             }
                                                         ?>                                                         
                                                      </ul>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                           </div>  
                </div>
            </div>
           
            <?php include 'red_patta.php'; ?>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <?php include 'popup.php'; ?>
    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/popper/popper.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.js"></script>
    <script src="vendors/counter/countUp.js"></script>
    <script src="vendors/hc-sticky/hc-sticky.js"></script>
    <script src="vendors/isotope/isotope.pkgd.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendors/slick/slick.js"></script>
    <script src="vendors/waypoints/jquery.waypoints.js"></script>
    <script src="vendors/air-datepicker/js/datepicker.min.js"></script>
    <script src="vendors/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="js/app.js"></script>
    <?php include 'svg.php'; ?>
</body>

</html>