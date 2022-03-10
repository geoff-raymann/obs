<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarGe Bank | One Time Sign Up</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sign-up">
        <div class="welcome">
            <h2> Welcome to MarGe Bank. <br> To enjoy our services, Register with us.</h2>
        </div>
        <div class="register-form">
            <div class="intro-form">
                <h2>Fill in your details to create a free Account</h2>
            </div>

            <?php echo "Errors log here"; ?>

            <div class="register-form">
                <form action="server.php" method="POST">
                    <input type="text" name="firstname" class="form-groups" placeholder="First Name"><br><br>
                    <input type="text" name="lastname" class="form-groups" placeholder="Last Name"><br><br>
                    <input type="text" name="username" class="form-groups" placeholder="User Name*" required><br><br>
                    <input type="email" name="email" class="form-groups" placeholder="Email*" required><br><br>
                    <input type="password" name="password" class="form-groups" placeholder="Password"><br><br>
                    <input type="password" name="cpassword" class="form-groups" placeholder="Confirm Password"><br><br>
                    <button class="btn" type="submit">SIGN UP</button><br><br>
                    <span>Already have an Account?<a href="login.php">Sign In</a></span>
                </form>
            </div>    
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
    