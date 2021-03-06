<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/19/2015
 * Time: 1:28 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = "Survival Frog Affiliate: Survival Frog";
include_once("includes/head.php");
?>
<body>
<?php
// $isSignupShow is for the index.php page's navigation, which is the switch of showing "Affiliate Signup" button.
$isSignupShow = true;
include_once("includes/header.php");
?>
<section class="container body survival-frog-article">
    <!-- <section class="page-header">
        <h3>Survival Frog Affiliate Program</h3>
    </section> -->
    <section class="left-tabpanel" role="tabpanel" id="left-tabpanel">
        <!-- Nav tabs -->
        <?php
        include_once("includes/left_sub_nav.php");
        $subNavHelper->renderNavTabs($subNavHelper->navTabs);
        ?>
        <!-- Tab panels -->
        <section class="tab-content right-tab-content">
            <article class="content home-page">
                <h2>Welcome to the Survival Frog Affiliate Area!</h2>

                <p>If you are an affiliate driving traffic, or a product owner looking for complementary products,
                    Survival Frog
                    is your 1 stop source for hundreds of top selling survival products.</p>
                <h4>E-Commerce: </h4>

                <p>SurvivalFrog.com has hundreds of survival products to choose from with average cart value over $90.
                    As an
                    affiliate you can send buyers to the e-commerce Home page, Category page or specific product pages
                    and you
                    will earn commissions on every item purchased. We offer the highest commissions in the industry and
                    affiliate cookies lasting 180 days. </p>

                <p>Sign up at <a href="http://www.shareasale.com/shareasale.cfm?merchantID=51591">shareasale.com</a></p>
                <h4>Direct Response Marketing pages:</h4></p>
                <p>For select survival gear we also offer DRM pages with upsells. If you would rather your buyers see a
                    dedicated sales page with no other distractions, then checkout one of our top selling survival gear
                    pages. We use Infusionsoft for affiliate tracking. If you need to signup for an Infusionsoft
                    account, click the Affiliate Signup button on the top right of the page. Once you have an account,
                    you can access it here:
                    <a href="https://ts970.infusionsoft.com/app/authentication/login">
                        https://ts970.infusionsoft.com/app/authentication/login
                    </a>
                </p>
                <h4>Info Products:</h4>

                <p>Our sister company, Peak 10 Publishing, LLC has a wide selection of info products in the Survival and
                    Self
                    Reliance niches.</p>

                <p>
                    TO PROMOTE: Go here to see info products on <a href="peak10publishing.com">peak10publishing.com</a>
                </p>
            </article>
        </section>
    </section>
</section>
<?php
include_once("includes/footer.php");
?>
</body>
</html>