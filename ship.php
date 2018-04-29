<?php
    include("_include/config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $buyrequest_type = addslashes($_POST['buyrequest_type']);
        $link = addslashes($_POST['link']);
        $title = addslashes($_POST['title']);
        $brand = addslashes($_POST['brand']);
        $itemtype = addslashes($_POST['itemtype']);
        $price = addslashes($_POST['price']);
        $qty = addslashes($_POST['qty']);
        $remarks = addslashes($_POST['remarks']);
        $repack = addslashes($_POST['repack']);


        //Image Related
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // echo $target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($buyrequest_type == 'request_product'){

            $sql = "INSERT INTO `buyrequest` (type,link,title,brand,itemtype,price,qty,remarks,repack) VALUES ('$buyrequest_type','$link','$title','$brand','$itemtype','$price','$qty','$remarks','$repack')";
            $result = mysqli_query($bd,$sql);

        }else if ($buyrequest_type == 'upload_product'){

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $smsg = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $fmsg = "File is not an image.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $fmsg = "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $fmsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $fmsg = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                    $image = basename($_FILES["fileToUpload"]["name"]);
                    
                    $sql = "INSERT INTO `buyrequest` (type, image) VALUES ('$buyrequest_type', '$image')";
                    $result = mysqli_query($bd,$sql);
                    
                    $smsg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    $fmsg = "Sorry, there was an error uploading your file.";
                }
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
        <?php include("ship/ship.header.php") ?>
        <?php include("ship/ship.content.php") ?>
        
        <?php include("_include/footer.php") ?>
        <?php include("_include/js.php") ?>
    </div>
    <script>

    $('.dropify').dropify();    
    // validate signup form on keyup and submit
    var buyrequest = $('input[name=buy_request]:checked').val();
    $("#submit_upload").attr('disabled','disabled');
    // console.log(buyrequest);

    $('input[name=buy_request]').change(function(){

        buyrequest = $('input[name=buy_request]:checked').val();
        // console.log(buyrequest);

        if (buyrequest == 'request_product'){
           $("#submit_upload").attr('disabled','disabled');
           $("#submit_request").removeAttr('disabled','disabled');

        }else if (buyrequest == 'upload_product'){
           $("#submit_request").attr('disabled','disabled');
           $("#submit_upload").removeAttr('disabled','disabled');
        }
    });
    </script>  
</body>

</html>