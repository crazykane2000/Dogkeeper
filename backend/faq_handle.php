<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';

    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate(); 
     if($pdo_auth['email']!="admin@myproperdeets.com"){
        header('Location:dashboard.php?choice=success&value=No Such Page present.');
        exit();
    }

    $table = "faq";
    $key_list = "`question`, `answer`";      
    $value_list  = "'".clean($_REQUEST['question'])."',";
    $value_list .= "'".clean($_REQUEST['answer'])."'";
                      
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:faq.php?choice=success&value=FAQ Added Successfully');              
    exit();

    ?>