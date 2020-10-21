<?php session_start();
	include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 

    $table = "my_stuff";
    $key_list = "`type`, `price`, `listing_title`, `description`,  `uploaded_by`, `uploaded_by_id`, `uniq_id`, `location`,`category`, `price_type`";      
    $value_list  = "'".$_REQUEST['type']."',";
    $value_list .= "'".$_REQUEST['price']."',";
    $value_list .= "'".$_REQUEST['listing_title']."',";
    $value_list .= "'".$_REQUEST['description']."',";
    $value_list .= "'".$pdo_auth['full_name']."',";
    $value_list .= "'".$pdo_auth['id']."',";
    $value_list .= "'".$_REQUEST['uniq_id']."',";
    $value_list .= "'".$_REQUEST['location']."',";
    $value_list .= "'".implode(",", $_REQUEST['category'])."',";
    $value_list .= "'".$_REQUEST['price_type']."'";

    //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_stuffs.php?choice=success&value=Stuff Added Successfully');              
    exit();