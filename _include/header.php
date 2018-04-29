<?php
    session_start();
    $isLogin = false;
    if (is_null($_SESSION['login_user'])) {
        $isLogin = true;
    }

?>
<script type="text/javascript">
    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }

    function countInCart() {
        var cart = getCookie("xxxx-shoppingCart");

        var totalCount = 0;

        var splitItem = cart.split(";");
        for (i=0;i<splitItem.length; i++) {
            var item = splitItem[i];
            if (item != null) {
                var itemDetail = item.split(":");
                if (itemDetail.length >1 ) {
                    totalCount += parseInt(itemDetail[1]);
                }
            }
        }

        // console.log(totalCount);

        document.getElementById("countInCart").innerHTML = "(" + totalCount + ")";
        document.getElementById("countInCart2").innerHTML = "(" + totalCount + ")";
        setTimeout(countInCart,500);
    }

    setTimeout(countInCart,500);
</script>
<div class="header-top-area">
    <div class="container-fluid">
        <div class="header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="JapanGogo">
                </a>
            </div>
            
            <div class="menu">
                
                <!-- <div class="lang-toggle hidden-sm hidden-xs">
                    <div class="lang active">E</div>
                    <div class="lang">繁</div>
                    <div class="lang">简</div>
                </div>  -->
                <div class="login-social hidden-sm  hidden-xs">
                    <div class="completed-shipments hidden-sm hidden-xs" style="display: inline-block">
                        HKD$1 = JPY¥13.68
                    </div>
                    <?php 

                        if ($isLogin) {
                    ?>
                        <a href="register.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login.php">Login</a>&nbsp;&nbsp;
                    <?php
                        } else {
                    ?>
                        Welcome,&nbsp;&nbsp;<b><?=$_SESSION['login_user']?></b>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a>
                    <?php
                        }
                    ?>
                    &nbsp;&nbsp;<a class="fab fa-facebook-f"></a><a class="fab fa-instagram"></a><a href="basket.php" class="fab fa fa-shopping-cart"></a><span id="countInCart">(0)</span>
                </div>
                <?php include("_include/nav.php") ?>
            </div>
        </div>
    </div>
</div>