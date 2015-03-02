<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/19/2015
 * Time: 1:26 PM
 */
?>
<header class="container big-header">
    <!-- logo -->
    <section class="logo" id="logo">
        <a href="index.php">
            <img src="image/survival-affiliate.jpg" alt="survival frog">
            <!-- <h2>SURVIVAL</h2>
            <aside class="logo-aside">
            <p>FROG</p>
            <img src="image/frog-logo-affiliate.jpg" alt="survival frog">
            </aside> -->
        </a>
        <section class="header-title">
            <h1>Affiliate Portal</h1>
        </section>
    </section>
    <!-- navigation -->
    <nav id="header-nav">
        <section class="navbar navbar-default" id="header-nav-container">
            <section class="container-fluid">
                <article class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        Home
                    </a>
                </article>
                <article class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="affiliatecontest.php">Affiliate Contest<span class="sr-only">(current)</span></a></li>
                        <li><a href="survivalfrog.php">E-Commerce</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                    <?php
                    /*
                     * For now, the index.php page doesn't need the signup form function
                     * */
                    if(isset($isSignupShow) == null || $isSignupShow == true){
                        echo "<button type='button' class='btn btn-default navbar-btn navbar-right' data-toggle='modal' data-target='#signUpModal'>Affiliate Signup</button>";
                    }
                    ?>
                </article><!-- /.navbar-collapse -->
            </section>
        </section>
    </nav>
</header>
<script src="./scripts/headerSection.js"></script>