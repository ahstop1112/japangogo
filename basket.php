<?php
    include_once("include/paypal_config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Japan Go Go</title>
    <?php include("_include/css.php") ?>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
    <div id="page">
        <?php include("basket/basket.header.php") ?>
        <?php include("basket/basket.container.php") ?>
        
        <?php include("_include/footer.php") ?>
        <?php include("_include/js.php") ?>
    </div>
</body>

</html>