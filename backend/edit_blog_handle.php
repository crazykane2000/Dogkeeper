<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
    

   $table = "blog";
     $id= $_REQUEST['id'];
     try {
      $stmt = $pdo->prepare('UPDATE `'.$table.'` SET `title`="'.str_replace("'", "", $_REQUEST['blog_title']).'", `category`="'.$_REQUEST['blog_category'].'", `desc`="'.clean($_REQUEST['blog_desc']).'"   WHERE id = :id');
      } catch(PDOException $ex) {
          echo "An Error occured!".$ex->getMessage(); 
          return ($ex->getMessage());
      }
     $stmt->execute(['id' => $id]);
     add_notification("A Blog  has been Updated", "admin");
     header('Location:view_blog.php?choice=success&value=Selected Blog  has been Updated Successfully');     
     exit();
  ?>