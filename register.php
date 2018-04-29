<?php
    include("_include/config.php");

    // If the values are posted, insert them into the database.
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql_check = "SELECT id FROM admin WHERE username='$myusername'";
        $result_check = mysqli_query($bd,$sql_check);
        $row = mysqli_fetch_array($result_check);
        $active = $row['active'];
        $count = mysqli_num_rows($result_check);
         
         
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count==1)
        {
            $fmsg = "Username is duplicated! Please try another one";
        }
        else
        {
            $sql = "INSERT INTO `admin` (username, passcode) VALUES ('$username', '$password')";
            $result = mysqli_query($bd,$sql);

            if($result){
                $smsg = "User Created Successfully. You can try to login now!";
            }else{
                $fmsg ="User Registration Failed";
            }
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
        <?php include("register/register.header.php") ?>
        <?php include("register/register.main.php") ?>
        <?php echo $result ?>
        <?php include("_include/footer.php") ?>
        <?php include("_include/js.php") ?>
    </div>
    <script>
    // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                username: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                
                username: {
                    required: "Please enter a username",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                }
            }
        });
    </script>   
</body>

</html>