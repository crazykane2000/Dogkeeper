<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
    $fata = get_data_id_data("message", "message_unique_id", $_REQUEST['message_unique_id']);
    $sender = $fata['sender_id'];

    //print_r($fata);

    $table = "chat";
    $key_list = "`message_unique_id`, `to_id`, `from_id`, `message`,  `price_proposed`, `price_type`";
    $value_list = "'".$_REQUEST['message_unique_id']."',";
    $value_list.="'".$pdo_auth['id']."',";
    $value_list.="'".$sender."',";
    $value_list.="'".str_replace("'", "", $_REQUEST['message'])."',";
    $value_list.="'".$fata['price_proposed']."',";
    $value_list.="'".$fata['price_type']."'";
   
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    // List messages here //

   try {
        $stmt = $pdo->prepare('SELECT * FROM `chat` WHERE `message_unique_id`="'.$_REQUEST['message_unique_id'].'"  ORDER BY date ASC ');
    } catch(PDOException $ex) {
        echo "An Error occured!";
        print_r($ex->getMessage());
    }
    $stmt->execute();
    $user = $stmt->fetchAll();

    try {
        $stmt = $pdo->prepare('UPDATE `message` SET  `message`="'.str_replace("'", "", $_REQUEST['message']).'"  WHERE `message_unique_id`="'.$_REQUEST['message_unique_id'].'"');
    } catch(PDOException $ex) {
        echo "An Error occured!";
        print_r($ex->getMessage());
    }
    $stmt->execute();
    
    foreach ($user as $key => $value) {
       if ($value['to_id']==$pdo_auth['id']) {
           echo '<div class="your" style="margin-bottom: 20px;float: right;width: 70%">
                    <div style="padding: 10px;border-radius: 9px;background-color: #ffefed;font-size: 15px;">
                       '.$value['message'].'
                       <div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                    </div>
                    <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;text-align: right;">'.$value['date'].'</div>

                </div><div style="padding:0px;clear: both;"></div>';
       }else{
        echo '<div class="his" style="margin-bottom: 20px;float: left;width:70%">
                <div style="padding: 10px;border-radius: 9px;background-color: #dfffff;font-size: 15px;">
                   '.$value['message'].'<div><b style="font-weight:bold;font-family:arial">Last Price :</b> '.$value['price_proposed'].' / '.$value['price_type'].'</div>
                </div>
                <div style="font-size: 12px;padding-top: 5px;padding-left: 10px;">'.$value['date'].'</div>
            </div><div style="padding:0px;clear: both;"></div>';
       }
    }
     mark_unread($_REQUEST['message_unique_id']);
?>