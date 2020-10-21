<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);
  extract($_REQUEST);

  if ($pass!=$cpass) {
    header('Location:sign_up.php?choice=error&value=password and Confirm Passwords Donot match');
    exit();
  }

  try {
      $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `email`="'.$email.'"  ORDER BY date DESC ');
  } catch(PDOException $ex) {
      echo "An Error occured!"; 
      print_r($ex->getMessage());
  }
  
	if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = ($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	     header('Location:sign_up.php?choice=error&value=Incorrect Email, Please Enter Valid Email Address');
       exit();
	    }
	  }


  $stmt->execute();
  $user = $stmt->fetchAll();
  $count = count($user);  
  if($count>0){
    header('Location:sign_up.php?choice=error&value=A User with Either Same Email or Same Transaction Address Already Exist');
    exit();
  }

  $tx_address = "";
  //Generate address and Associate with this account 
  if(empty($_REQUEST['tx_address'])){
     $stmt = $pdo->prepare('SELECT * FROM `tx_addresses` WHERE `status`="Pending" LIMIT 1');
     $stmt->execute();
     $fata = $stmt->fetch();  
     //print_r($fata);

      $table = "tx_addresses";
      $result = $pdo->exec("UPDATE $table SET `status`='Used', `email`='".$email."'  WHERE id=".$fata['id']);
      $tx_address = $fata['tx_address'];
  }


  if(isset($_REQUEST['add_user'])){

  	  $secret = "";
      //print_r($_REQUEST);
      $table = "users";
      $name = $_REQUEST['full_name'];
      $uniq = uniqid();

      $key_list = " `full_name`, `email`, `password`, `approved`, `tx_address`, `user_type`";
      $value_list ="'".$name."',";
      $value_list.="'".$email."',";
      $value_list.="'".$pass."',";
      $value_list.="'Yes',";
      $value_list.="'".$tx_address."',";
      $value_list.="'".$_REQUEST['user_type']."'";

      $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
     //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
      add_notification("A New User Created", "admin");
    
      header('Location:sign_up.php?choice=success&value=Registeration Complete&passcode='.base64_encode($email));
     exit();
    }
?>
