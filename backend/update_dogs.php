<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo_auth = authenticate();   
    $fatay = get_data_id_data("my_dog", "id", $_REQUEST['id']);
    $uniq_id = $fatay['uniq_id'];
     ?>
    <!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Dog Here | Dog Keeper</title>
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

                                           <form action="update_dog_handle.php" method="POST">
                                               <div style="padding: 40px;background-color: #fff;width:100%;min-height: 600px">
                                                   <h4 style="color: #fb484e">Update Dog Here  </h4><hr/>
                                                    <div style="padding: 10px;"></div>

                                                     <div class="row" style="color: #222;">
                                                        <div class="col-lg-12">
                                                           <div class="form-group">
                                                              <label style="font-weight: bold;">Gender</label><br/>
                                                              <select class="form-control" required="" name="price_type" style="color: #8894a0 !important">
                                                                   <option><?php echo $fatay['gender']; ?></option>
                                                                   <option>Male</option>
                                                                   <option>Female</option>
                                                                </select>
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>
                                                     
                                                        <div class="col-lg-10">
                                                           <div class="form-group">
                                                              <label style="font-weight: bold;">Status</label><br/>
                                                              <select class="form-control" required="" name="status" style="color: #8894a0 !important">
                                                                   <option><?php echo $fatay['status']; ?></option>
                                                                   <option>Active</option>
                                                                   <option>Pending</option>
                                                                </select>
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>
                                                     

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;">Dog Breed </label>
                                                              <select class="form-control" required="" name="dog_breed" style="color: #8894a0 !important">
                                                                <option><?php echo $fatay['breed']; ?></option>
                                                                <option>Affenpinscher.</option>
                                                                <option>Afghan Hound.</option>
                                                                <option>Aidi. (aka Atlas Mountain Dog)</option>
                                                                <option>Airedale Terrier.</option>
                                                                <option>Akbash Dog.</option>
                                                                <option>Akita Inu (a.k.a.Japanese Inu)</option>
                                                                <option>Alaskan Klee Kai.</option>
                                                                <option>Alaskan Malamute.</option>
                                                                 <option> Hourly Rate</option>
                                                              </select>
                                                          </div>
                                                           <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;">Listing Title </label>
                                                              <input type="text" required="" value="<?php echo $fatay['listing_title']; ?>" name="listing_title" rows="6" placeholder="Enter Listing Title" class="form-control">
                                                          </div>
                                                          <div style="padding: 3px;"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                          <div class="form-group">
                                                              <label style="font-weight: bold;">Dog Name </label>
                                                              <input type="text" required="" name="dog_name" value="<?php echo $fatay['dog_name']; ?>" rows="6" placeholder="Enter Dog Name" class="form-control">
                                                          </div>
                                                          <div style="padding: 3px;"></div>
                                                        </div>


                                                        <input type="hidden" name="id" value="<?php echo $fatay['id'];  ?>">

                                                        <div class="col-lg-6">
                                                          <div class="form-group">
                                                                <label style="font-weight: bold;">Dog Location/ Location Where You need Services </label>
                                                                 <select  type="text" required="" name="location"  placeholder="Enter Location" required="" class="form-control" style="color: #8894a0 !important">
                                                                  <option ><?php echo $fatay['location']; ?></option>
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

                                                       
                                                        <div class="col-xl-8 col-lg-8">
                                                             <div style="padding: 10px;">
                                                                
                                                                 <div class="form-group">
                                                                    <label style="font-weight: bold;">Something About the Dog </label>
                                                                    <textarea required="" name="description" rows="6" placeholder="Enter Description" class="form-control"><?php echo $fatay['description']; ?></textarea>
                                                                </div>
                                                             </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4">
                                                             <div style="padding: 10px"></div>
                                                            <a class="btn btn-success btn-lg" href="update_dogs_images.php?uniq_id=<?php echo $fatay['uniq_id']; ?>">Update Uploaded Files</a>
                                                            <div id="galat"></div>
                                                            <div style="padding: 10px"></div>

                                                             <input type="hidden" name="uniq_id" id="uniq_id" value="<?php echo $fatay['uniq_id']; ?>">
                                                        </div>
                                                    </div>

                                                   <hr/>

                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary btn-lg" style="width: 300px">Add My Dog to List</button>
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