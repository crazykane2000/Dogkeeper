 <?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    //File Upload Starts
    $target_dir = "kyc_documents/";
    $mota =  date("U").strip_comma(basename($_FILES["file"]["name"]));
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if file already exists
    if (file_exists($target_file)) {
        header('Location:dashboard.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000000) {
        header('Location:dashboard.php?choice=success&value=Sorry File too Large ');
        exit();
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf") {
      header('Location:dashboard.php?choice=success&value=Sorry, only JPG, JPEG, PNG & GIF files are allowed.');       
        exit();
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    //echo "mastar";
         header('Location:dashboard.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              $table = "kyc";
              $key_list = "`user_id`,`username`, `email`, `file`, `document_name`";
              
              $value_list = "'".strip_comma($pdo_auth['id'])."',";
              $value_list .= "'".strip_comma($pdo_auth['name'])."',";
              $value_list .= "'".strip_comma($pdo_auth['email'])."',";
              $value_list.="'".$mota."',";
              $value_list.="'"."KYC Document"."'";
              
              //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
              
              $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
              add_notification_user("A kyc Request Initiated", "user", $pdo_auth['id']);
              add_notification("A kyc is Requested from User", "admin");

               header('Location:dashboard.php?choice=success&value=KYC Requested, we will get back to you shortly');
              
               exit();
        } else {
          header('Location:dashboard.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   
?>
