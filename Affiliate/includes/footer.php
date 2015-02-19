<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/19/2015
 * Time: 1:30 PM
 */
?>
<footer class="page-footer">
    <section class="container">
        <section class="wrap">
            <span class="fa fa-tag"></span>
            <label>
                <a href="termconditions.php"> Terms & Conditions </a>
            </label>
            <span class="fa fa-tag"></span>
            <label>
                <a href="privacypolicy.php">Privacy Policy</a>
            </label>
            <span class="fa fa-tag"></span>
            <label>
                <a href="contactus.php">Contact Us</a>
            </label>
            <!-- <span class="fa fa-tag"></span>
            <label>
                <a href="adswithus.html">Advertise With Us</a>
            </label> -->
            <span class="fa fa-tag"></span>
            <label>
                <a href="index.php">Affiliate Sites</a>
            </label>
        </section>
    </section>
</footer>
<!-- Sign up form -->
<form accept-charset="UTF-8" action="https://ts970.infusionsoft.com/app/form/process/09a1b8333a752929cfc593c35bb2780f" class="modal fade" method="POST"
      id="signUpModal" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
    <section class="modal-dialog">
        <article class="modal-content">
            <input name="inf_form_xid" type="hidden" value="09a1b8333a752929cfc593c35bb2780f" />
            <input name="inf_form_name" type="hidden" value="ClickBank Affiliate Form" />
            <input name="infusionsoft_version" type="hidden" value="1.37.0.44" />
            <header class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <section class="sub-header">
                    <section class="logo">
                        <h2>SURVIVAL</h2>
                        <aside class="logo-aside">
                            <p>FROG</p>
                            <img src="image/frog-logo-affiliate.jpg" alt="survival frog">
                        </aside>
                    </section>
                    <h4 class="modal-title" id="modalLabel">Almost there: Let's make money! </h4>
                </section>
            </header>
            <section class="modal-body">
                <div class="form-group">
                    <label for="inf_field_Email">Email *</label>
                    <input class="form-control" id="inf_field_Email" name="inf_field_Email" placeholder="Email" type="text" />
                </div>
                <div class="form-group">
                    <label for="inf_field_FirstName">First Name</label>
                    <input class="form-control" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name" type="text" />
                </div>
                <div class="form-group">
                    <label for="inf_field_LastName">Last Name</label>
                    <input class="form-control" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name" type="text" />
                </div>
                <div class="form-group">
                    <label for="inf_field_Phone1">Phone</label>
                    <input class="form-control" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone" type="text" />
                </div>
                <div class="form-group">
                    <label for="inf_custom_clickbankhop">ClickBank ID</label>
                    <input class="form-control" id="inf_custom_clickbankhop" name="inf_custom_clickbankhop" placeholder="ClickBank ID" type="text" />
                </div>
                <div class="form-group">
                    <label for="inf_field_Nickname">Skype</label>
                    <input class="form-control" id="inf_field_Nickname" name="inf_field_Nickname" placeholder="Skype" type="text" />
                </div>
            </section>
            <section class="modal-footer">
                <input id="webFormSignUp" class="btn btn-default" type="submit" value="Sign Up" />
            </section>
        </article>
    </section>
</form>
<noscript>
    <strong>Warning !</strong>
    Because your browser does not support HTML5, some elements are simulated using JScript.
    Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
</noscript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script async src="scripts/com.js"></script>
<script async src="https://ts970.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=f7ce9c537fb005f19ad603e982beacf3"></script>
<?php
/**
 * This is for generate custom html script tags
*/
if(isset($scripts)){
    foreach($scripts as $e)
    {
        echo "<script src=\"" . $e . "></script>";
    }
}
?>