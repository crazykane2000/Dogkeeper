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

    $table = "blog_category";
    $key_list = "`blog_category`";      
    $value_list  = "'".$_REQUEST['blog_category']."'";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_blog_category.php?choice=success&value=Blog Category Added Successfully');              
    exit();

    ?>