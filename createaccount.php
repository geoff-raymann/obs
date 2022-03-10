<?php 
// session_start();

    // if(isset($_SESSION['username'])){
    //     $_SESSION['msg'] = "You must login first to view this page";
    //     header("location : login.php");
    // // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bank Account | MG Bank</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="styleaccount.css">
</head>
<body>
    <header class="account-initials">
        <div class="account-intro">
            <h1>MG Bank. Credit Account</h1>
        </div>
        <div class="account-details">
            <div class="intro-form">
                <h3>Enter accurately your details. National ID number. Name as it appears on ID, accurate date of birth</h3>
            </div>
            <hr>
            <br>
            <div class="register-form">
                <form action="createaccount.php" method="post" class="create-user-account">
                    <label for="fullname">
                        Full Name:
                        <input type="text" id="fullname" class="form-groups" name="fullname">
                    </label>
                    <br><br>
                    <label for="identity">
                        ID Number:
                        <input type="number" id="identity" class="form-groups" name="identity">
                    </label><br><br>
                    <label for="date-of-birth">
                        Date of Birth:
                        <input type="date" id="date-of-birth" class="form-groups" name="date-of-birth">
                    </label><br><br>
                    <label for="phone-number">
                        Phone Number:
                        <input type="number" id="phone-number" class="form-groups" name="phone-number">
                    </label><br><br>
                    <input type="radio" class="" id="male-gender" name="gender" value="Male">
                    <label for="male-gender">Male</label>
                    <input type="radio" class="" id="female-gender" name="gender" value="female">
                    <label for="female-gender">Female</label>
                    <input type="radio" class="" id="other" name="gender" value="Other-gender">
                    <label for="other">Other</label><br><br>
                    <label for="password">
                        Password:
                        <input type="password" id="password" class="form-groups" name="password">
                    </label><br><br>
                    <label for="password">
                        Confirm Password:
                        <input type="password" id="password" class="form-groups" name="cpassword">
                    </label><br><br>
                    <input type="file" class="form-groups" name="profile-photo">
                    <br><br><br>
                    <span>Have a bank Account? <a href="loginbanker.php">Login here</a></span>
                    <br><br>
                    <input class="btn" type="submit" value="SUBMIT">
                    &nbsp;
                    <input class="btn" type="reset" name="reset" value="RESET">
                </form>
            </div>
        </div>
    </header>
   
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