<section id="home-shoppingflow-section">
    <div class="container-fluid">
        <div class="main-logo-container">
            <h3><i class="fas fa-plus"></i>Register</h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-6 col-xs-12">
                <form id="signupForm" action="" method="post">
                    <input name="username" type="text" class="input-field input-s" placeholder="Username" /><br/><br/>
                    <input name="password" type="password" class="input-field input-s" password placeholder="Password" /><br/><br/>
                    <input type="submit" class="btn btn-s" password value="Register" /><br/><br/>

                    <?php if(isset($smsg)){ ?>
                        <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> You can <a href="login.php">Login</a> now.</div>
                    <?php } ?>
                    <?php if(isset($fmsg)){ ?>
                        <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?>. Pleae try another username.</div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</section>