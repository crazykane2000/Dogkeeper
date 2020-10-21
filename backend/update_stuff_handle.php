<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    

     $table = "my_stuff";
       $id= $_REQUEST['id'];
       try {
        $stmt = $pdo->prepare('UPDATE `my_stuff` SET `listing_title`="'.$_REQUEST['listing_title'].'", `description`="'.$_REQUEST['description'].'", `location`="'.$_REQUEST['location'].'", `status`="'.$_REQUEST['status'].'", `price`="'.$_REQUEST['price'].'", `price_type`="'.$_REQUEST['price_type'].'"  WHERE id = :id');
        } catch(PDOException $ex) {
            echo "An Error occured!".$ex->getMessage(); 
            return ($ex->getMessage());
        }
       $stmt->execute(['id' => $id]);
       add_notification("A stuff has been Updated", "admin");
       header('Location:view_all_stuff.php?choice=success&value=Selected stuff has been Updated Successfully');     

    ?>