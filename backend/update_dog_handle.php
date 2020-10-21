<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    

     $table = "my_dog";
       $id= $_REQUEST['id'];
       try {
        $stmt = $pdo->prepare('UPDATE `my_dog` SET `listing_title`="'.$_REQUEST['listing_title'].'", `description`="'.$_REQUEST['description'].'", `location`="'.$_REQUEST['location'].'", `status`="'.$_REQUEST['status'].'", `breed`="'.$_REQUEST['dog_breed'].'", `gender`="'.$_REQUEST['dog_gender'].'", `dog_name`="'.$_REQUEST['dog_name'].'"  WHERE id = :id');
        } catch(PDOException $ex) {
            echo "An Error occured!".$ex->getMessage(); 
            return ($ex->getMessage());
        }
       $stmt->execute(['id' => $id]);
       add_notification("A Dog has been Updated", "admin");
       add_notification("A Dog has been Updated", "user", $pdo_auth['id']);
       header('Location:view_dogs.php?choice=success&value=Selected Dog has been Updated Successfully');     
       exit();
    ?>