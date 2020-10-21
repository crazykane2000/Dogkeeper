<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    
     $table = "uploaded_files";
       $id= $_REQUEST['id'];
       try {
        $stmt = $pdo->prepare('DELETE FROM  '.$table.'  WHERE id = :id');
        } catch(PDOException $ex) {
            echo "An Error occured!"; 
            return ($ex->getMessage());
        }
       $stmt->execute(['id' => $id]);
       add_notification("An uploaded file has been Deleted", "admin");
       header('Location:update_files.php?choice=success&value=Selected File has been Deleted Successfully&uniq_id='.$_REQUEST['uniq_id']);     

    ?>