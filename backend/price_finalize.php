<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    $fata = get_data_id_data("message", "message_unique_id", $_REQUEST['message_unique_id']);
    
    $uniq = $_REQUEST['message_unique_id'];
    $table = "message";
    $result = $pdo->exec("UPDATE `$table` SET `price`='".$_REQUEST['price_offered']."' WHERE `message_unique_id`='".$_REQUEST['message_unique_id']."'");


    $table = "chat";
    $key_list = "`message_unique_id`, `to_id`, `from_id`, `message`,  `price_proposed`, `price_type`";
    $value_list = "'".$uniq."',";
    $value_list.="'".$pdo_auth['id']."',";
    $value_list.="'".$fata['sender_id']."',";
    $value_list.="'".str_replace("'", "", $_REQUEST['message'])."',";
    $value_list.="'".$_REQUEST['price_offered']."',";
    $value_list.="'".$fata['price_type']."'";

     $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
     header('Location:mesages.php?choice=success&value=Message sent Successfully.&message_unique_id='.$uniq);
     exit();
?>