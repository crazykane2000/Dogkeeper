<?php  include 'backend/administrator/connection.php';
  include 'backend/administrator/add_notification_user.php';
  include 'backend/administrator/function.php';
  $pdo = new PDO($dsn, $user, $pass, $opt);
  
  
	if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = ($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	     header('Location:subscribe.php?choice=error&value=Incorrect Email, Please Enter Valid Email Address');
       exit();
	    }
	  }


    if (preg_match("/\bhttp\b/",$_REQUEST['message'])) {
      header('Location:subscribe.php?choice=error&value=Sorry, Seems like you are malfunctioning something');
        exit();
    }  

    $table = "subscribe";

    $key_list = "`email`";
    $value_list = "'".$_REQUEST['email']."'";
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");

    $to = "hi@myproperdeets.com";
    $sub = "A New subscribe email to your Website www.myproperdeets.com";
    
    $headers= "From: ".htmlentities("Subscriber")." <subscribe@myproperdeets.com>\r\n";
    $headers.= "Reply-To: No-Reply"." <".$_REQUEST['email'].">\r\n";
    $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "MIME-Version: 1.0" . "\r\n";
    $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
    // $message = "<b>Name </b> : ".htmlentities(($_REQUEST['name']))."<br/>
    //     <b>Mobile </b> : ".htmlentities(($_REQUEST['phone']))."<br/>
    //     <b>Email </b> : ".htmlentities(($_REQUEST['email']))."<br/>
    //     <b>Query </b> : ".htmlentities(($_REQUEST['message']))."<br/>";
    
    $curl = curl_init();
    $email = $_REQUEST['email'];

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost:3012/smtp/forGmail",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n\t\"_to\" : \"hi@myproperdeets.com,crazykane2000@gmail.com\",\n\t\"_subject\" : \"New Subscriber from website : www.myproperdeets.com\",\n\t\"_htmlText\" : \"<h1>A User has Subscribed to your email List </h1><br/> <br/><b>Email : </b> $email<br/>\"\n}",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    header('Location:subscribe.php?choice=success&value=Your Request for Contact Is Submitted&passcode='.base64_encode($email));
   exit();
?>
