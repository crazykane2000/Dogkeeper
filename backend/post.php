<?php session_start();
	include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    include 'resize_image.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 

	$target_dir = "uploaded_data/";
	$fota = date("U").basename($_FILES["file"]["name"]);
	$target_file = $target_dir .$fota ;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["file"]["tmp_name"]);
	  if($check !== false) {
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	// Check file size < less than 5 mb
	if ($_FILES["file"]["size"] > 52428800) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	    	$resizedFile = $target_dir."/thumb/".$fota;
			smart_resize_image($target_file , null, 600 , 490 , false , $resizedFile , false , false ,80 ); 

	    	$table = "uploaded_files";
		    $key_list = "`file`, `uniq_id`";      
		    $value_list  = "'".$fota."',";
		    $value_list .= "'".$_REQUEST['userName']."'";
		                      
		    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
		    echo "Upload Success";
		    exit();

	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	} 

 ?>