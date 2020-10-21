<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
     if($pdo_auth['email']!="admin@dogkeeper.com"){
        header('Location:dashboard.php?choice=success&value=No Such Page present.');
        exit();
    }

     $table = "subscribe";
     $id= $_REQUEST['id'];
     try {
      $stmt = $pdo->prepare('DELETE FROM  '.$table.'  WHERE id = :id');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          return ($ex->getMessage());
      }
     $stmt->execute(['id' => $id]);
     add_notification("A Blog  has been Deleted", "admin");
     header('Location:view_subscribers.php?choice=success&value=Selected Subscriber has been Deleted Successfully');     
     exit();
    ?>