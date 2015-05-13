<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/19/2015
 * Time: 1:30 PM
 */
class myFooter
{
    public $productSelection = array(
        "salf" => "Solar Air Lantern",
        "apgf" => "Grenade",
        "ppfree" => "Patriotic Paracord",
        "cpb" => "Cobra Belt",
        "lswf" => "Lifestraw",
        "card" => "Playing Cards",
        "esbf" => "Emergency Survival Blanket"
    );

    public function renderProductSelection($selection){
        echo <<<END
        <select id="pTarget" class="form-control">
END;
        foreach($selection as $key => $value)
        {
            echo <<<END
            <option value=$key>$value</option>
END;
        }
        echo "</select>";
    }
}
$myProductSelection = new myFooter();
?>
    <script src="./scripts/mainContentSection.js"></script>
<!-- The footer is hidden. No Reason! -->
    <footer class="page-footer hidden">
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
    <form accept-charset="UTF-8"
          action="https://ts970.infusionsoft.com/app/form/process/26ec775d75cc1320b10ed0c3bad53618"
          class="modal fade" method="POST"
          id="signUpModal" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <section class="modal-dialog">
            <article class="modal-content">
                <input name="inf_form_xid" type="hidden" value="09a1b8333a752929cfc593c35bb2780f"/>
                <input name="inf_form_name" type="hidden" value="ClickBank Affiliate Form"/>
                <input name="infusionsoft_version" type="hidden" value="1.37.0.44"/>
                <header class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
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
                    <section class="horizontal">
                        <section class="left">
                            <div class="form-group">
                                <label for="inf_field_Email">Email *</label>
                                <input class="form-control" id="inf_field_Email" name="inf_field_Email" placeholder="Email"
                                       type="text" required/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_FirstName">First Name *</label>
                                <input class="form-control" id="inf_field_FirstName" name="inf_field_FirstName"
                                       placeholder="First Name" type="text" required/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_LastName">Last Name *</label>
                                <input class="form-control" id="inf_field_LastName" name="inf_field_LastName"
                                       placeholder="Last Name" type="text" required/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_Address2Street1">Street Address</label>
                                <input class="form-control" id="inf_field_Address2Street1" name="inf_field_Address2Street1"
                                       placeholder="Street Address"
                                       type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_City2">City</label>
                                <input class="form-control" id="inf_field_City2" name="inf_field_City2"
                                       placeholder="City" type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_State2">State</label>
                                <input class="form-control" id="inf_field_State2" name="inf_field_State2" placeholder="State"
                                       type="text"/>
                            </div>
                            <div class="form-group">
                                <label for="inf_field_State2">Zip Code</label>
                                <input class="form-control" id="inf_field_PostalCode2" name="inf_field_PostalCode2"
                                       placeholder="Zip Code"
                                       type="text"/>
                            </div>
                        </section>
                        <aside class="split-line"></aside>
                        <section class="right">
                        <div class="form-group">
                            <label for="inf_field_State2">Username *</label>
                            <input class="form-control" id="inf_other_Username" name="inf_other_Username"
                                   placeholder="Username" readonly
                                   type="text" required/>
                        </div>
                        <div class="form-group">
                            <label for="inf_field_State2">Password *</label>
                            <input class="form-control" id="inf_other_Password" name="inf_other_Password"
                                   placeholder="Password"
                                   type="password" required/>
                        </div>
                        <div class="form-group">
                            <label for="inf_field_State2">Confirm Password *</label>
                            <input class="form-control" id="inf_other_RetypePassword" name="inf_other_RetypePassword"
                                   placeholder="Confirm Password"
                                   type="Password" required/>
                        </div>
                    </section>
                    </section>
                </section>
                <section class="modal-footer">
                    <input id="webFormSignUp" class="btn btn-default" type="submit" value="Sign Up"/>
                </section>
            </article>
        </section>
    </form>
    <noscript>
        <strong>Warning !</strong>
        Because your browser does not support HTML5, some elements are simulated using JScript.
        Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
    </noscript>
    <!-- role="tabpanel" class="tab-pane fade" -->
    <article id="generateLiknForm" class="form-size hidden">
        <section class="form-horizontal">
            <section class="form-group">
                <span id="requiredCBID" class="fa fa-asterisk"></span>
                <label for="cbid" class="col-xs-2 control-label">Infusionsoft Affiliate ID:</label>
                <section class="col-sm-5">
                    <input type="text" class="form-control" id="cbid" placeholder='Infusionsoft Affiliate ID, starts with "af"'>
                </section>
            </section>
            <section class="form-group">
                <label for="tid" class="col-xs-2 control-label">Tracking ID:</label>
                <section class="col-sm-5">
                    <input type="text" class="form-control" id="tid" placeholder="Tracking ID">
                </section>
            </section>
            <section class="form-group">
                <label for="pTarget" class="col-xs-2 control-label">Products:</label>
                <section class="col-sm-5">
                    <?php
                    $myProductSelection->renderProductSelection($myProductSelection->productSelection);
                    ?>
                </section>
            </section>
            <section class="form-group hidden">
                <label class="col-xs-2 control-label">Exit Pop Up Offer:</label>
                <section class="col-sm-5">
                    <div class="radio">
                        <label class="radio-inline">
                            <input type="radio" name="onoff" id="onPop" value=""> On
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="onoff" id="offPop" value="v=n" checked> Off
                        </label>
                    </div>
                </section>
            </section>
            <section class="form-group">
                <label class="col-xs-2 control-label">
                </label>
                <section class="col-sm-5 form-btn-control">
                    <button id="genBtn" type="button" class="btn btn-default">Generate Link</button>
                </section>
            </section>
            <section class="form-group">
                <label class="col-xs-2 control-label">Your Link:</label>
                <section class="col-sm-5">
                    <input id="generatedLink" data-toggle="tooltip" data-placement="top" type="text" title=""
                           class="form-control" readonly>
                </section>
            </section>
            <section class="form-group">
                <em class="col-sm-9 alert-danger">
                    ** Important - Test your links to confirm you entered your Infusionsoft ID properly and that the clicks are tracking within Infusionsoft. **
                </em>
            </section>
        </section>
    </article>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/com.js"></script>
    <script async
            src="https://ts970.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=f7ce9c537fb005f19ad603e982beacf3"></script>
<?php
/**
 * This is for generate custom html script tags
 */
if (isset($customScript)) {
    foreach ($customScript as $e) {
        echo "<script src=\"" . $e . "\"></script>";
    }
}
?>