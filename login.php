<?php
    include("_include/config.php");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        // username and password sent from Form
        $myusername=addslashes($_POST['username']);
        $mypassword=addslashes($_POST['password']);
         
        $sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
        $result=mysqli_query($bd,$sql);
        $row=mysqli_fetch_array($result);
        $active=$row['active'];
        $count=mysqli_num_rows($result);
         
         
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count==1)
        {
        $_SESSION['login_user']=$myusername;
         
        ob_start();
        header("location: index.php");
        ob_end_flush();
        die();
        }
        else
        {
        $error="Wrong Username / Password";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Japan Go Go</title>
    <?php include("_include/css.php") ?>
    <link rel="stylesheet" type="text/css" href="css/services.css">
</head>

<body>
    <div id="page">
        <?php include("login/login.header.php") ?>
        <?php include("login/login.main.php") ?>
        
        <?php include("_include/footer.php") ?>
        <?php include("_include/js.php") ?>
    </div>
</body>

</html>