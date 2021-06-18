 <?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
   
    

    if($_REQUEST['amount']==""){
      redirectTo("buy.php","error","Amount or Tokens cant be Less than Zero");
      exit();
    }

     if($_REQUEST['bbt']==""){
      redirectTo("buy.php","error","Amount or Tokens cant be Less than Zero");
      exit();
    }

     if($_REQUEST['tx_idd']==""){
      redirectTo("buy.php","error","Please enter a valid Transaction ID");
      exit();
    }

    if($_REQUEST['amount']<=0){
      redirectTo("buy.php","error","Amount or Tokens cant be Less than Zero");
      exit();
    }

    if($_REQUEST['bbt']<=0){
      redirectTo("buy.php","error","You cant Buy SX Tokens Less than Zero Value");
      exit();
    }

   
   $table = "buy_token";
          $key_list = "`user_id`,`user_name`, `email`, `tx_address`, `amount`, `no_of_tokens`, `buy_tx_id`, `currency`";
          $value_list = "'".$pdo_auth['id']."',";
          $value_list.= "'".$pdo_auth['name']."',";
          $value_list.="'".$pdo_auth['email']."',";
          $value_list.="'".$pdo_auth['tx_address']."',";
          $value_list.="'".$_REQUEST['bbt']."',";
          $value_list.="'".$_REQUEST['amount']."',";
          $value_list.="'".$_REQUEST['tx_idd']."',";
          $value_list.="'".$_REQUEST['currency']."'";
          
         $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
          add_notification_user("A Buy Request has Been Initiated", "user", $pdo_auth['id']);
          add_notification("A Buy Request has been Initiated", "admin");
          header('Location:buy.php?choice=success&value=Your Buy request has been initiated ');
          exit();
  
     
?>