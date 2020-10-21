<?php session_start();
    session_unset();
    session_destroy();
    header('Location:../sign_up.php?choice=success&value= Logged Out Successfully ');
?>