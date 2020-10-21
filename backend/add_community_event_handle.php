<?php session_start();
	include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 

    $table = "my_community";
    $key_list = "`event_date`, `title`, `desc`, `uploaded_by_id`,  `address`, `location`, `uniq_id`";      
    $value_list  = "'".$_REQUEST['date']."',";
    $value_list .= "'".$_REQUEST['event_title']."',";
    $value_list .= "'".$_REQUEST['description']."',";
    $value_list .= "'".$pdo_auth['id']."',";
    $value_list .= "'".$_REQUEST['address']."',";
    $value_list .= "'".$_REQUEST['location']."',";
    $value_list .= "'".$_REQUEST['uniq_id']."'";

    //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_event.php?choice=success&value=Events Added Successfully');              
    exit();

    ?>