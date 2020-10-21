<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    $fata = get_data_id_data("my_stuff", "id", $_REQUEST['seller_id']);
    
    $uniq = uniqid();
    $table = "message";
        $key_list = "`sender_id`, `receiver_id`, `stuff_id`, `price_proposed`, `price`, `price_type`, `message`, `message_unique_id`";
        $value_list = "'".$pdo_auth['id']."',";
        $value_list.="'".$_REQUEST['seller_id']."',";
        $value_list.="'".$_REQUEST['stuff_id']."',";
        $value_list.="'".$_REQUEST['price_offered']."',";
        $value_list.="'".$fata['price']."',";
        $value_list.="'".$_REQUEST['price_type']."',";
        $value_list.="'".str_replace("'", "", $_REQUEST['message'])."',";
        $value_list.="'".$uniq."'";       
        $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");


        $table = "chat";
        $key_list = "`message_unique_id`, `to_id`, `from_id`, `message`,  `price_proposed`, `price_type`";
        $value_list = "'".$uniq."',";
        $value_list.="'".$pdo_auth['id']."',";
        $value_list.="'".$_REQUEST['seller_id']."',";
        $value_list.="'".str_replace("'", "", $_REQUEST['message'])."',";
        $value_list.="'".$_REQUEST['price_offered']."',";
        $value_list.="'".$_REQUEST['price_type']."'";
       
        $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");


         header('Location:mesages.php?choice=success&value=Message sent Successfully.');
     exit();
?>