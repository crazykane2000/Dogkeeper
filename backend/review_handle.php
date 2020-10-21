<?php session_start();
	include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 

    $table = "review";
    $key_list = "`message_unique_id`, `given_by_id`, `given_to_id`, `rating`, `review`, `stuff_id`, `message_id`";      
    $value_list  = "'".$_REQUEST['message_unique_id']."',";
    $value_list .= "'".$_REQUEST['given_by_id']."',";
    $value_list .= "'".$_REQUEST['given_to_id']."',";
    $value_list .= "'".$_REQUEST['rating']."',";
    $value_list .= "'".clean($_REQUEST['review'])."',";
    $value_list .= "'".$_REQUEST['stuff_id']."',";
    $value_list .= "'".$_REQUEST['message_id']."'";

    //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_order_details.php?choice=success&value=Review Added Successfully&Order_id_data_middle_is_teh_kanoon='.$_REQUEST['message_id']);        
    exit();

?>