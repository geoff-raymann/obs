<?php 
// session_start();

// if(isset($_SESSION['username'])){
//     $_SESSION['msg'] = "You must login first to view this page";
//     header("location : login.php");
// }

// if(isset($_GET['logout'])){
//     session_destroy();
//     unset($_SESSION['username']);
//     header("location : index.php");
// }
?>
<?php include('header.php');   ?>
    <div class="services">
        <h1>Hello, and Welcome to self service. It is a thy tradition</h1>
        <br><br>
        <div class="two-buttons">
            <div class="credit-account">
                <button class="btn credit-here">CREDIT YOUR CARD</button>
            </div>
            <br>
            <div class="check-card-balance">
                <button class="btn check-balance">CHECK CREDIT BALANCE</button>

            </div>
        </div>
        
    </div>
<?php include('footer.php'); ?>
