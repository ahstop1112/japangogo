<?php
    include("_include/config.php");
        // username and password sent from Form
    session_start();
    $_SESSION['login_user']= null;
     
    header("location: index.php");
    exit();
    
?>