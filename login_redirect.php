<?php session_start();
	include 'backend/administrator/connection.php';
	include 'backend/administrator/add_notification_user.php';
	include 'backend/administrator/function.php';
	
	$pdo = new PDO($dsn, $user, $pass, $opt);
	$user = $_REQUEST['type'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$role = $_REQUEST['type'];



	if(isset($_REQUEST['login'])){
		// check if the user has selected the role or not?
		if ($role=="") {
			header('Location:sign_up.php?choice=error&value=Please Select a Role ');
			exit();
		}
		try {
		    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `email` = "'.$email.'" AND `password`="'.$pass.'" AND `approved`="Yes"');
		   } catch(PDOException $ex) {
		    echo "An Error occured!"; 
		    print_r($ex->getMessage());
		}
		
		$stmt->execute();
		$user = $stmt->fetch();
		$row_count = $stmt->rowCount();	

		if($row_count>0){	
			$_SESSION['user'] = $email;
			$_SESSION['role'] = "user";
		 	$_SESSION['loged_primitives'] = md5($pass);
			header('Location:backend/dashboard.php?choice=success&value=Login Successful, Welcome to User Panel');
			exit();
		}else{
			header('Location:sign_up.php?choice=error&value=Please Relogin, Previous Supplied Credentials Were Wrong or Account was Not Verified');
			exit();
		}
	}
	

?>