<nav class="navigation-menu hidden-xs hidden-sm">
    <div class="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li class="">
                    <div class="btn-group">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HKD
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/change_lang/zh-hk">RMB</a>
                            <a class="dropdown-item" href="/change_lang/zh-hk">THB</a>
                            <a class="dropdown-item" href="/change_lang/zh-hk">VND</a>
                        </div>
                    </div>
                </li> -->
                
                <li><a id="mm-home" class="smoth-scroll" href="index.php">Home</a></li>
                <li><a id="mm-services" class="smoth-scroll" href="services.php">Services</a></li>
                <li><a id="mm-shareShipments" class="smoth-scroll" href="shareShipments.php">Best Sellers</a></li>
                <li><a id="mm-ship" class="smoth-scroll" href="ship.php">Buy For You</a></li>
                <li><a id="mm-contact" class="smoth-scroll" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav id="mainNav-mobile">
    <ul>
        <li>
            <a href="" style="display: inline-block; width: 45%"><i id="menu-close" class="fas fa-times-circle orange"></i></a>
            <?php 

                if ($isLogin) {
            ?>
                <a class="txt-right" style="display: inline-block; width: 50%" href="register.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login.php">Login&nbsp;&nbsp;</a>
            <?php
                } else {
            ?>
                Welcome,&nbsp;&nbsp;<b><?=$_SESSION['login_user']?></b>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a>
            <?php
                }
            ?>
            
            
        </li>
        <li><a id="mm-home" class="smoth-scroll" href="index.php">Home</a></li>
        <li><a id="mm-services" class="smoth-scroll" href="services.php">Services</a></li>
        <li><a id="mm-shareShipments" class="smoth-scroll" href="shareShipments.php">Best Sellers</a></li>
        <li><a id="mm-ship" class="smoth-scroll" href="ship.php">Buy For You</a></li>
        <li><a id="mm-contact" class="smoth-scroll" href="contact.php">Contact Us</a></li>
        <li style="padding-left: 20px"><a class="fab fa-facebook-f" style="display: inline-block;"></a><a class="fab fa-instagram" style="display: inline-block;"></a><a href="basket.php" class="fab fa fa-shopping-cart"style="display: inline-block;"></a><span id="countInCart2"style="display: inline-block; padding: 0">(0)</span></li>
            </ul>
<!--         <li><a class="smoth-scroll" href="qa.php"></a></li>
 -->            <li><a class="smoth-scroll" href="contact.php">Contact</a></li>
        <!-- <li class="lang-toggle">
            <a class="lang active">E</a>
            <a class="lang ">繁</a>
            <a class="lang">简</a>
        </li> -->
        <li class="paddingLeft-15px"><a class="fab fa-facebook-f" style="display: inline-block"></a><a class="fab fa-instagram" style="display: inline-block"></a></li>

        <li><a class="remark">Suggested Exchange Rate: HKD$1 = JPY¥13.68</a></li>
    </ul>
</nav>
<div class="header-menu-mobile visible-xs visible-sm">
    <a id="btn-menu-mobile" href="#mainNav-mobile">
        <i class="fas fa-bars"></i>
    </a>
</div>
