<?php
    include("_include/config.php");
        // username and password sent from Form
    $_SESSION['login_user']= null;
     
    header("location: index.php");
    exit();
    
?>