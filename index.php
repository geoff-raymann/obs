<?php 
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header("location : index.php");
    }
?>
<?php include('header.php'); ?>
    <header class="intro-header">
        <h1>We are your partner. We share your vision. Make it Count!</h1>
        <div class="watch-video">
            <a href="">Watch Make it Count</a>  
            <video src="" width="200px" height="100px" controls="controls" id="the-video"></video>
        </div>
    </header>
    <nav class="actions-to-perform">
        <div class="account-create">
            <a href="createaccount.php">Internet Banking</a>
        </div>
        <div class="locate-us">
            <a href="location.php">Locate Us</a>
        </div>
        <div class="support">
            <a href="support.php">Support</a>
        </div>
        <div class="logout">
            <?php if(isset($_SESSION['username'])) : ?>
                <h3> Welcome <strong><?php echo $_SESSION['username']; ?></h3>
                <button><a href="index.php?logout='1'">Logout</a></button>
            <?php endif ?>
        </div>
       
    </nav>
    <main class="main-part">
        <section class="offer-sect">
            <div class="advantage-banking card">
                <img src="images/alex-motoc-qKP7jKndEO0-unsplash.jpg" alt="customer banking"> 
                <div class="contain">
                    <h1>Advantage Banking</h1>
                    Advantage banking meets your unique financial needs while positioning....
                </div>
            </div>
            <div class="platinum-banking card">
                <img src="images/kirill-balobanov-2rIs8OH5ng0-unsplash.jpg" alt="picture of a customer">
                <div class="contain">
                    <h1>Platinum Banking</h1>
                    Platinum Banking guarantees you a sophisticated banking experiences....
                </div>
            </div>
            <div class="mg-smartpesa card">
                <img src="images/melissa-laun-OBq6RjEevEI-unsplash.jpg" alt="Image of a Customer">
                <div class="contain">
                    <h1>MG S-PESA</h1>
                    Save money on the MG S-PESA right from your phone. Put money away....
                </div>
            </div>
            <div class="asset-finance card">
                <img src="images/serhiy-hipskyy-KbJSjHirklg-unsplash.jpg" alt="image of an asset">
                <div class="contain">
                    <h1>Asset Based Finance</h1>
                    We are your partner in ensuring your productivity. If your business....
                </div>
            </div>
        </section>
        <section class="newest-product">
            <h2>Stay connected to your money 24/7, anyway, everywhere</h2>
            <p>The MGB Swift Card technology is an amazing experience for the next generation. It enables you to carry your money in your pocket in a single plastic card. It needs you to only swipe against a sellers compatible machine to pay.</p>
            <p>The MGB Swift Card provides an easy and secure way to: </p>
            <ol class="list-of-things">
                <li>Carry out purchases without having to withdraw to hard money</li>
                <li>Top up from your online account on your phone on one swipe</li>
                <li>To carry out secured transctions.</li>
            </ol>
            <p>The MGB Swift Card... Easy way to transact</p>
            <div class="card-application">
                <a href="cardregistration.php">GET YOUR CARD</a>
            </div>
        </section>
        <section class="what-is-happening">
            make news updates upload here.
        </section>
    </main>
<?php include('footer.php'); ?>