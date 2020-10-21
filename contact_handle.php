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
	     header('Location:contact.php?choice=error&value=Incorrect Email, Please Enter Valid Email Address');
       exit();
	    }
	  }
    foreach ($_REQUEST as $key => $value) {
      if ($value=="") {
        header('Location:contact.php?choice=error&value=Please Fill The complete form');
        exit();
      }
    }

    if (preg_match("/\bhttp\b/",$_REQUEST['message'])) {
      header('Location:contact.php?choice=error&value=Sorry, Seems like you are malfunctioning something');
        exit();
    }  

  $table = "contact";

    $key_list = "`name`, `email`, `phone`, `message`";
    $value_list = "'".$_REQUEST['name']."',";
    $value_list.="'".$_REQUEST['email']."',";
    $value_list.="'".$_REQUEST['phone']."',";
    $value_list.="'".$_REQUEST['message']."'";

    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");

        $to = "hi@dogkeeper.com";
        $sub = "Contact Message From Your Website www.dogkeeper.com";
        
        $headers= "From: ".htmlentities(($_REQUEST['name']))." <website@dogkeeper.com>\r\n";
        $headers.= "Reply-To: No-Reply"." <".$_REQUEST['email'].">\r\n";
        $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
        $headers.= "MIME-Version: 1.0" . "\r\n";
        $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
        $message = "<b>Name </b> : ".htmlentities(($_REQUEST['name']))."<br/>
            <b>Mobile </b> : ".htmlentities(($_REQUEST['phone']))."<br/>
            <b>Email </b> : ".htmlentities(($_REQUEST['email']))."<br/>
            <b>Query </b> : ".htmlentities(($_REQUEST['message']))."<br/>";
        
        $curl = curl_init();

          $name = $_REQUEST['name'];
          $email = $_REQUEST['email'];
          $phone = $_REQUEST['phone'];
          $message = $_REQUEST['message'];

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:3012/smtp/forGmail",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\n\t\"_to\" : \"hi@dogkeeper.com,crazykane2000@gmail.com\",\n\t\"_subject\" : \"New Contact Message from website : www.dogkeeper.com\",\n\t\"_htmlText\" : \"<h1>A New Query message, the details are : </h1><br/><b>Name : $name</b> <br/><b>Email : </b> $email<br/><b>Phone : </b> $phone<br/><b>Query : </b> $message<br/>\"\n}",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));

        //$response = curl_exec($curl);
        //print_r($response);

        curl_close($curl);
    header('Location:contact.php?choice=success&value=Your Request for Contact Is Submitted&passcode='.base64_encode($email));
   exit();
?>
