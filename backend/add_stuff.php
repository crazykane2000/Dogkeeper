<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo_auth = authenticate();
    $uniq_id = uniqid();
     ?>
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Stuff | Dog Keeper</title>
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
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        .form-control{
            border-color: #87dfea !important;
        }

       
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
                                   
                                    <?php see_status($_REQUEST); ?>
                                    <div style="padding: 20px;" class="px-3">

                                           <form action="add_stuff_handle.php" method="POST">
                                               <div style="padding: 40px;background-color: #fff;width:100%;min-height: 600px">
                                                   <h4 style="color: #fb484e">Add Stuff Here  </h4><hr/>
                                                    <div style="padding: 10px;"></div>

                                                     <div class="row" style="color: #222;">
                                                        <div class="col-lg-3">
                                                           <div class="form-group">
                                                              <label style="font-weight: bold;">Renting or Selling?</label><br/>
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="Rent">
                                                                <label class="custom-control-label" for="customRadioInline1">Rent</label>
                                                              </div>
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="Sell">
                                                                <label class="custom-control-label" for="customRadioInline2">Sell</label>
                                                              </div>
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>
                                                      
                                                        <div class="col-lg-3">
                                                          <input type="hidden" name="uniq_id" value="<?php echo $uniq_id; ?>">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;clear: both;">Price </label>
                                                              <div style="clear: both;"></div>
                                                              <div style="padding: 7px;background-color: #31dbdb;float: left;">$</div>
                                                              <input style="width: calc(100% - 30px)"  type="text" required=""  name="price" placeholder="Enter Sell or Rent Price" class="form-control">
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;">Pricing Type </label>
                                                              <select class="form-control" required="" name="price_type" style="color: #8894a0 !important">
                                                                <option value="">Select Pricing Type</option>
                                                                <option>Flat Rate</option>
                                                                 <option> Hourly Rate</option>
                                                              </select>
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;">Listing Title </label>
                                                              <input type="text" required="" name="listing_title" rows="6" placeholder="Enter Listing Title" class="form-control">
                                                          </div>
                                                          <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-9">
                                                          <div class="form-group">
                                                            <label style="font-weight: bold;">Listing Category </label>
                                                            <select class="js-example-basic-multiple form-control" required="" style="width: 100%" placeholder="Select Category" name="category[]" multiple="multiple">
                                                               <option>Dog Bathing</option>
                                                                <option> Dog Walking</option>
                                                                <option>Dog Keeping</option>
                                                                <option>Dog Consultancy</option>
                                                                <option>Dog Health Planning</option>
                                                                <option>Dog Services</option>
                                                                <option>Dog Grooming</option>
                                                               <option> Other</option>
                                                            </select>
                                                          </div>
                                                         <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                                <label style="font-weight: bold;">Location </label>
                                                                 <select  type="text" required="" name="location"  placeholder="Enter Location" required="" class="form-control" style="color: #8894a0 !important">
                                                                  <option value="">search by county</option>
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

                                                                </select>   
                                                            </div>
                                                        </div>

                                                       
                                                        <div class="col-xl-12 col-lg-6">
                                                             <div style="padding: 10px;">
                                                                
                                                                 <div class="form-group">
                                                                    <label style="font-weight: bold;">Listing description </label>
                                                                    <textarea required="" name="description" rows="6" placeholder="Enter Description" class="form-control"></textarea>
                                                                </div>
                                                             </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12">
                                                            <label style="font-weight: bold;">Drag and Drop Image Here (Max Size 5MB) </label>
                                                            <div id="myDrop" class="dropzone" style="background-image: url(sed.jpg);background-position: center;border:solid 1px #ddd;height: 280px;background-repeat: no-repeat;background-color: #f5f5f5">
                                                                  <div class="dz-default dz-message"></div>
                                                            </div>
                                                            <div id="galat"></div>
                                                            <div style="padding: 10px"></div>

                                                             
                                                        </div>
                                                    </div>

                                                   <hr/>

                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary btn-lg" style="width: 300px">Activate My Service</button>
                                                    </div>


                                               </div>
                                           </form>
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="../js/app.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>    
    <script data-sample="1">
            CKEDITOR.replace( 'description', {
                height: 250
            } );
            Dropzone.autoDiscover = false;
            $(document).ready(function(){
              $('#myDrop').dropzone({
                url: 'post.php', method: 'post', addRemoveLinks: true,
                success : function(file, response){
                   $("#galat").html('<div style="color:#fff;background-color:#33dede;padding:5px 10px;font-size:14px;">Images Uploaded</div>');
                },
                sending: function(file, xhr, formData){
                    formData.append('userName', '<?php echo $uniq_id; ?>');
                },
                removedfile: function(file) {
                    x = confirm('Do you want to delete?');
                    if(!x){return false;}else{
                      //alert(file.name);
                     $("#dilip").load("delete_file.php?uniq_id=<?php echo $uniq_id; ?>&file="+file.name);
                     file.previewElement.remove(); 
                   }                    
                }
              });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2({ placeholder: "Select a Category",
                allowClear: true});
            });
        </script>
    <?php include 'svg.php'; ?>
    <div id="dilip"></div>
</body>

</html>