<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Japan Go Go</title>
    <?php include("_include/css.php") ?>
    <link rel="stylesheet" type="text/css" href="css/shareShipments.css">
</head>

<body>
    <div id="page">
        <?php include("shareShipments/shareShipments.header.php") ?>
        <?php include("shareShipments/shareShipments.share.php") ?>
        
        <?php include("_include/footer.php") ?>
        <?php include("_include/js.php") ?>
    </div>
</body>
<script src="js/lib/masonry.pkgd.min.js"></script>
<script>
    $('#masonry').masonry({
    // options
    itemSelector: '.content'
    });
</script>    
</html>