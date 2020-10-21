<?php session_start();
	include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    if (!check_dogOwner($pdo_auth)) {
        header("Location:dashboard.php?choice=error&value=You are Not Previledged to Add this Entry.");
        exit();
    }

    $table = "my_dog";
    $key_list = "`gender`, `breed`, `listing_title`, `description`,  `uploaded_by`, `uploaded_by_id`,  `uniq_id`, `dog_name`, `location`";      
    $value_list  = "'".$_REQUEST['gender']."',";
    $value_list .= "'".$_REQUEST['dog_breed']."',";
    $value_list .= "'".$_REQUEST['listing_title']."',";
    $value_list .= "'".clean($_REQUEST['description'])."',";
    $value_list .= "'".$pdo_auth['full_name']."',";
    $value_list .= "'".$pdo_auth['id']."',";
    $value_list .= "'".$_REQUEST['uniq_id']."',";
    $value_list .= "'".$_REQUEST['dog_name']."',";
    $value_list .= "'".$_REQUEST['location']."'";

    //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_dogs.php?choice=success&value=Your Dog Added Successfully');              
    exit();
?>