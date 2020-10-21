<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    

   $table = "blog_category";
     $id= $_REQUEST['id'];
     try {
      $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `blog_category`="'.$_REQUEST['blog_category'].'"  WHERE id = :id');
      } catch(PDOException $ex) {
          echo "An Error occured!".$ex->getMessage(); 
          return ($ex->getMessage());
      }
     $stmt->execute(['id' => $id]);
     add_notification("A Blog Category has been Updated", "admin");
     header('Location:view_blog_category.php?choice=success&value=Selected Blog Category has been Updated Successfully');     
     exit();
  ?>