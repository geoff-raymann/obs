<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarGe Bank | Sign In</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sign-up">
        <div class="welcome">
            <h2> Welcome to MarGe Bank. <br> To enjoy our services, Login to your MarGe Account.</h2>
        </div>
        <div class="register-form">
            <div class="intro-form">
                <h2>Login Here</h2>
            </div>
            <div class="register-form">
                <form action="server.php" method="POST" class="login-user">
                    <input type="text" name="username" class="form-groups" placeholder="User Name*" required>
                    <br><br>
                    <input type="password" name="password" class="form-groups" placeholder="Password*" required>
                    <br><br>
                    <?php echo "errors log here"; ?>
                    <br><br>
                    <a href="reset.php">Forgot your login details?</a>
                    <br><br>
                    <!-- <button class="btn" type="submit">SIGN IN</button> -->
                    <input type="submit" name="LogInUsername" value="SUBMIT" class="btn">
                    <br><br>
                    <span>Don't have an Account?<a href="signup.php">Sign Up.</a></span>
                    <br><br>
                    <a href="help.php">Need help?</a>
            </form>
            </div>
            <hr>
            <span><b>Marge Bank</b>. <br>We are here to inform you that we are lauching our swift card blockchain technology soon. You will be able to carry out all your transctions (I mean ALL) since we are soon supplying every shop, restaurant and outlets sellers wuith the machine compatible with smart money transfer. Aren't ready to transact by just a swap on your card? Easy right? Watch out soon for that.</span>
        </div>
    </div>
    <footer class="lean-footer">
    <div class="footer-tail">
            <div class="copyright">
                Regulated by the CBK | <?php  echo "<span>&copy; </span>" . date("Y");  ?> MG Bank Limited. All rights reserved.
            </div>
            <div class="social-media">
                <a href="#">facebook logo</a>
                <a href="#">twitter</a>
                <a href="#">youtube</a>
                <a href="#">LinkedIn</a>
                <a href="#">WhatsApp</a>
            </div>
            <div class="other-offers">
                <a href="">social media</a>
                <a href="">T & Cs</a>
                <a href="">Cookie Policy</a>
                <a href="">Customer Promise</a>
            </div>
        </div>
    </footer>
</body>
</html>
    
