<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    if (!check_dogOwner($pdo_auth)) {
        header("Location:dashboard.php?choice=error&value=You are Not Previledged to Add this Entry.");
        exit();
    }

     $table = "my_dog";
       $id= $_REQUEST['id'];
       try {
        $stmt = $pdo->prepare('DELETE FROM  '.$table.'  WHERE id = :id');
        } catch(PDOException $ex) {
            echo "An Error occured!"; 
            return ($ex->getMessage());
        }
       $stmt->execute(['id' => $id]);
       add_notification("A Dog has been Deleted", "admin");
       header('Location:view_dogs.php?choice=success&value=Selected Dog has been Deleted Successfully');     

    ?>