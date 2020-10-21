<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();

    if(isset($_REQUEST['update_user'])){
      $table = "users";
      //echo "UPDATE $table SET `name`='".$_REQUEST['name']."', `email`='".$_REQUEST['email']."', `password`='".$_REQUEST['password']."',`tx_address`='".$_REQUEST['tx_address']."'  WHERE id=".$_REQUEST['id'];
      $result = $pdo->exec("UPDATE $table SET `full_name`='".$_REQUEST['name']."', `password`='".$_REQUEST['password']."'  WHERE id=".$pdo_auth['id']);
       add_notification_user("Your Profile has been Updated", "user", $pdo_auth['id']);
      header('Location:edit_profile.php?choice=success&value=Your Profile has been Updated');
    }
?>