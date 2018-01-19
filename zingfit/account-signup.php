<!DOCTYPE html>
<html id="new" class="none">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>Sign Up</h1>
</div>
<div class="page-content">
    <div class="row">
        <form name="customerForm" action="/reserve/index.cfm" method="post" enctype="multipart/form-data" class="form-horizontal span8 offset2">
            <input type="hidden" name="action" value="Account.save">
            <input type="hidden" name="facebookid" value="" />
            <div class="alert alert-info fb-login">
                Have a Facebook account?
                <a href="#" class="btn" data-facebook="login"><span>Register with Facebook</span></a>
            </div>
            <div id="usernamerow" class="control-group required ">
                <label class="control-label" for="username">Email</label>
                <div class="controls">
                    <input type="text" name="username" value="">
                </div>
            </div>
            <div id="passwordrow" class="control-group required ">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" name="password" value="">
                </div>
            </div>
            <div id="passwordconfirmrow" class="control-group required ">
                <label class="control-label" for="passwordconfirm">Confirm Password</label>
                <div class="controls">
                    <input type="password" name="passwordconfirm" value="">
                </div>
            </div>
            <hr />
            <div id="firstnamerow" class="control-group required ">
                <label class="control-label" for="firstname">First Name</label>
                <div class="controls">
                    <input type="text" name="firstname" value="" maxlength="20">
                </div>
            </div>
            <div id="lastnamerow" class="control-group required ">
                <label class="control-label" for="lastname">Last Name</label>
                <div class="controls">
                    <input type="text" name="lastname" value="">
                </div>
            </div>
            <div id="phonerow" class="control-group required ">
                <label class="control-label" for="phone">Primary Phone</label>
                <div class="controls">
                    <input type="text" name="phone" value="">
                </div>
            </div>
            <div id="addressrow" class="control-group required ">
                <label class="control-label" for="address">Address</label>
                <div class="controls">
                    <input type="text" name="address" value="">
                </div>
            </div>
            <div id="cityrow" class="control-group required ">
                <label class="control-label" for="city">City</label>
                <div class="controls">
                    <input type="text" name="city" value="-">
                </div>
            </div>
            <div id="staterow" class="control-group required ">
                <label class="control-label" for="state">State</label>
                <div class="controls">
                    <select name="state">
                        <option></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY" selected="selected">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennesse</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div id="ziprow" class="control-group required ">
                <label class="control-label" for="zip">Zip</label>
                <div class="controls">
                    <input type="text" name="zip" value="" maxlength="9">
                </div>
            </div>
            <div id="referrerrow" class="control-group ">
                <label class="control-label" for="referrer">How did you hear about us?</label>
                <div class="controls">
                    <select name="referrer" id="referrer" onchange="checkReferrer()">
                        <option value=""></option>
                        <option value="fillin:Studio Customer" class="fillin">Studio Customer</option>
                        <option value="Web Search">Web Search</option>
                        <option value="Print Advertisement">Print Advertisement</option>
                        <option value="Social Promotion">Social Promotion</option>
                        <option value="fillin:referred by" class="fillin">referred by</option>
                        <option value="TEST SOCCER">TEST SOCCER</option>
                        <option value="Instructor Referral">Instructor Referral</option>
                    </select>
                    <br/>
                    <input type="text" name="otherreferrer" id="otherreferrer" value="" style="display:none" placeholder="Enter Referrer" maxlength="50" />
                </div>
            </div>
            <div id="preferredsiteidrow" class="control-group ">
                <label class="control-label" for="preferredsiteid">Preferred Location</label>
                <div class="controls">
                    <select name="preferredsiteid">
                        <option value=""></option>
                        <option value="1" selected="selected">East Hampton</option>
                        <option value="2">Southampton</option>
                    </select>
                </div>
            </div>
            <div id="groupactivationcoderow" class="control-group ">
                <label class="control-label" for="groupactivationcode">Group Enrollment Code</label>
                <div class="controls">
                    <input type="text" name="groupactivationcode" value="" />
                    <span class="help-block">If you've been provided with a group code, enter it here</span>
                </div>
            </div>
            <input type="hidden" name="agreeterms" value="1">
            <div class="form-actions">
                <input type="submit" name="_submit" value="Next" class="btn btn-primary" />
                <input type="button" name="_cancel" value="Cancel" class="btn" onclick="window.location='/reserve/index.cfm?action=Account.info'" />
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
<script src="static/jquery.placeholder.min.js"></script>
<script>
$('input,textarea').placeholder();
</script>
<script type="text/javascript">
function checkReferrer() {
    if ($('#referrer option:selected').hasClass('fillin')) {
        $('#otherreferrer').show();
    } else {
        $('#otherreferrer').hide();
    }
}
$(document).ready(function(e) {
    $('a[rel=zingtip]').tooltip({
        html: true
    });
});
</script>
