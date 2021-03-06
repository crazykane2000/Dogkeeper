<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    //File Upload Starts
    $target_dir = "profile/";
    $date = date("U");
    $mota =  $date.basename($_FILES["file"]["name"]);
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
           header('Location:edit_profile.php?choice=error&value=File is Not an Image');
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        header('Location:edit_profile.php?choice=error&value=Sorry File Already Exist');
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        header('Location:edit_profile.php?choice=error&value=Sorry File too Large ');
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      header('Location:edit_profile.php?choice=error&value=Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
         header('Location:edit_profile.php?choice=success&value=Sorry, your File was Not Uploaded');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              $table = "users";
              $result = $pdo->exec("UPDATE $table SET `file`='".$mota."'  WHERE id=".$pdo_auth['id']);
                add_notification_user("Your Profile Photo has been changed", "user", $pdo_auth['id']);
                add_notification("A User Updated his Profile", "admin");
               header('Location:edit_profile.php?choice=success&value=Your Profile Photo has been Updated');
               exit();
        } else {
           header('Location:edit_profile.php?choice=error&value=Sorry, There Was an Error Uploading Your File');
        }
    }
   
?>
