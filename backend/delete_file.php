<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    
     $table = "uploaded_files";
       $id= $_REQUEST['file'];
       try {
        $stmt = $pdo->prepare('DELETE FROM  '.$table.'  WHERE file LIKE "%'.$_REQUEST['file'].'" AND `uniq_id`="'.$_REQUEST['uniq_id'].'"');
        } catch(PDOException $ex) {
            echo "An Error occured!".$ex->getMessage(); 
            return ($ex->getMessage());
        }
       $stmt->execute();
       //echo 'DELETE FROM  '.$table.'  WHERE file LIKE "%'.$_REQUEST['file'].'" AND `uniq_id`="'.$_REQUEST['uniq_id'].'"';

    ?>