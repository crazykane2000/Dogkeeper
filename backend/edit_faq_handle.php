<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    

   $table = "faq";
     $id= $_REQUEST['id'];
     try {
      $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `question`="'.$_REQUEST['question'].'", `answer`="'.$_REQUEST['answer'].'"  WHERE id = :id');
      } catch(PDOException $ex) {
          echo "An Error occured!".$ex->getMessage(); 
          return ($ex->getMessage());
      }
     $stmt->execute(['id' => $id]);
     add_notification("A FAQ Question has been Updated", "admin");
     header('Location:faq.php?choice=success&value=Selected FAQ has been Updated Successfully');     
     exit();
  ?>