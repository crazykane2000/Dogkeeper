<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);     
 ?><!doctype html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home Dog Services | DogKeeper</title>
      <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="vendors/font-awesome/css/fontawesome.css">
      <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
      <link rel="stylesheet" href="vendors/slick/slick.css">
      <link rel="stylesheet" href="vendors/animate.css">
      <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">

   </head>
   <body>
      <div id="site-wrapper" class="site-wrapper home-health-medical">
         <header id="header" class="main-header header-float header-sticky header-sticky-smart header-light header-style-02 text-uppercase">
            <div class="header-wrapper sticky-area">
               <?php include 'header.php'; ?>
            </div>
         </header>
         <div class="content-wrap">
            <?php include 'banner.php'; ?>
           	<?php include 'home_boxes.php'; ?>
            <section id="section-02" class="pt-12 text-center categories">
               <div class="container">
                  <div class="text-center mb-9 heading">
                     <h2 class="mb-6 font-weight-bold">
                        What type of specialist are you looking for?
                     </h2>
                     <div class="mb-0 font-size-lg text-gray">
                        With over 5000 Service Providers and experts in the Dog provides a
                        listing of all Service Providers
                        across a wide variety if medical fields
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Grooming </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Trainings</a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">Dog Walking </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Dentist </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">Dog Nursury </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Gynecology </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog surgery </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Diet </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Food </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Health </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">Dog Dresses
                        </a>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="flipInX">
                        <a class="btn btn-hero text-uppercase font-weight-normal rounded-0" title="Category" href="explore-full-map-grid.html">
                        Dog Something </a>
                     </div>
                  </div>
                  <div class="separate border-bottom pt-9"></div>
               </div>
            </section>
            
            <section id="section-05" class="pt-12 pb-13" style="background-color: #f9f9f9">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 mb-5 mb-lg-0" data-animate="slideInLeft">
                        <ul class="nav nav-pills tab-style-03 mb-6" role="tablist" aria-orientation="vertical">
                           <li class="nav-item">
                              <a class="nav-link active" id="top-provider-tab" data-toggle="pill" href="#top-provider" role="tab" aria-controls="top-provider" aria-selected="true">Top Providers</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="recommend-provider-tab" data-toggle="pill" href="#recommend-provider" role="tab" aria-controls="recommend-provider" aria-selected="false">Recommended
                              Providers</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade show active" id="top-provider" role="tabpanel">
                              <div class="table-responsive">
                                 <table class="table table-hover listing-table">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-1.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Dog Walker</div>
                                                   <a class="font-weight-semibold text-link  d-block font-size-md name" href="listing-details-no-image.html">Kamlesh Shukla</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Moutain View, CA</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(25 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-2.jpg" alt="Provider 2">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Dog Bather</div>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Matthew Huff DDS</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Chicago</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(22 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-3.jpg" alt="Provider 3">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <span class="text-dark">Dog Foods</span>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Santosh Gard MD</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Copenhagen</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(28 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-4.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Obstetriccian &
                                                      Gynecologist
                                                   </div>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Dirk Peterson MD</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>London, UK</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(17 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="mr-3 image">
                                                <img src="images/listing/health-and-medical-provider-5.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <span class="text-dark">Optometrist</span>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Hilary Loshand MD</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Philadenphia, PA</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(19 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="recommend-provider" role="tabpanel" aria-labelledby="recommend-provider-tab">
                              <div class="table-responsive">
                                 <table class="table table-hover listing-table">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-1.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Family Physician</div>
                                                   <a class="font-weight-semibold text-link  d-block font-size-md name" href="listing-details-no-image.html"> Jhon
                                                   Lin
                                                   Md</a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Moutain View, CA</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(25 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-2.jpg" alt="Provider 2">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Dog Cleaner</div>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Matthew Huff </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Chicago</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(22 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-3.jpg" alt="Provider 3">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <span class="text-dark">Dog Rara</span>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Santosh Gard </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Copenhagen</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(28 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="image mr-3">
                                                <img src="images/listing/health-and-medical-provider-4.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <div class="text-dark font-size-sm">Dog Batakh
                                                   </div>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Dirk Peterson </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>London, UK</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(17 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="media align-items-center">
                                                <a href="listing-details-no-image.html" class="mr-3 image">
                                                <img src="images/listing/health-and-medical-provider-5.jpg" alt="Provider 1">
                                                </a>
                                                <div class="media-body lh-14">
                                                   <span class="text-dark">Dog Clothes</span>
                                                   <a class="font-weight-semibold text-link d-block font-size-md name" href="listing-details-no-image.html">
                                                   Hilary Loshand </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Philadenphia, PA</td>
                                          <td>
                                             <div class="author-rate">
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item checked">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="rate-item">
                                                   <svg class="icon icon-ionicons_svg_md-star">
                                                      <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                   </svg>
                                                </span>
                                                <span class="d-inline-block ml-3">(19 Reviews)</span>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>

              <section id="section-05" class="pt-11 pb-11">
                   <div class="container">
                      <div class="d-flex align-items-center mb-7 flex-wrap flex-sm-nowrap">
                         <h2 class="mb-3 mb-sm-0">
                            <span class="font-weight-semibold">Some</span>
                            <span class="font-weight-light">Blogs &amp; Articles</span>
                         </h2>
                         <a href="blogs.php" class="link-hover-dark-primary ml-0 ml-sm-auto w-100 w-sm-auto">
                         <span class="font-size-md d-inline-block mr-1">All articles</span>
                         <i class="fal fa-chevron-right"></i>
                         </a>
                      </div>
                      <div class="row">
                        <?php 
                            $blogs = get_data_id_data_alll("blog", 3);
                            foreach ($blogs as $key => $value) {
                                echo '<div class="col-md-4 mb-4 zoomIn animated" data-animate="zoomIn">
                                            <div class="card border-0">
                                               <a href="blog_desc.php?id='.$value['id'].'" class="hover-scale">
                                               <img src="backend/blogs/thumb/'.$value['file'].'" alt="'.$value['title'].'" class="card-img-top image">
                                               </a>
                                               <div class="card-body px-0">
                                                  <div class="mb-2"> <a href="blog_category.php?category='.$value['category'].'" class="link-hover-dark-primary">'.$value['category'].'</a></div>
                                                  <h5 class="card-title lh-13 letter-spacing-25">
                                                     <a href="blog_desc.php?id='.$value['id'].'" class="link-hover-dark-primary text-capitalize">
                                                     '.$value['title'].'</a>
                                                  </h5>
                                                  <ul class="list-inline">
                                                     <li class="list-inline-item mr-0">
                                                        <span class="text-gray">'.$value['date'].'</span>
                                                     </li>
                                                     <li class="list-inline-item">
                                                        <a href="#" class="link-hover-dark-primary">Myproperdeets</a>
                                                     </li>
                                                  </ul>
                                               </div>
                                            </div>
                                         </div>';
                            }
                         ?>
                         
                         
                      </div>
                   </div>
                </section>
           
         </div>
        <?php include 'footer.php'; ?>
      </div>
      <?php include 'popup.php'; ?>
      
      <script src="vendors/jquery.min.js"></script>
      <script src="vendors/popper/popper.js"></script>
      <script src="vendors/bootstrap/js/bootstrap.js"></script>
      <script src="vendors/counter/countUp.js"></script>
      <script src="vendors/hc-sticky/hc-sticky.js"></script>
      <script src="vendors/isotope/isotope.pkgd.js"></script>
      <script src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
      <script src="vendors/slick/slick.js"></script>
      <script src="vendors/waypoints/jquery.waypoints.js"></script>
      <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="js/app.js"></script>
      <?php include 'svg.php'; ?>
   </body>
</html>