<!DOCTYPE html>
<html id="login" class="none">
<?php require_once( 'includes/head.php'); ?>

<div class="alert"><a href="#" class="close" data-dismiss="alert"><i class="icon-remove"></i></a>Sorry, that username/password was not recognized. Please try again.
    <br/>If you think you are using the correct log in information, please clear your browser's cache and delete your cookies, then try again.</div>

<div id="loginbox">
    <div class="row">
        <div class="span4 offset1" id="signinbox">
            <header class="page-header">
                <h2>Sign In</h2>
            </header>
            <h4><span>Already have an account...</span></h4>
            <form name="loginForm" action="https://demo.zingfit.com/reserve/index.cfm?action=" method="post" class="">
                <input type="hidden" name="action" value="Account.doLogin" />
                <div class="control-group">
                    <input type="text" name="username" id="username" placeholder="Email" value="" />
                </div>
                <div class="control-group">
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="control-group" id="remembermerow">
                    <label class="checkbox">
                        <input type="checkbox" name="rememberme" /> Remember me</label>
                </div>
                <div class="control-actions">
                    <button type="submit" class="btn">Sign in</button>
                </div>
                <div class="control-group" id="forgotpasswordrow">
                    <p><a href="/reserve/index.cfm?action=Account.forgotPassword">Forgot your password?</a></p>
                </div>
            </form>
            <hr />
            <div class="control-actions facebook-login">
                <a href="#" class="btn" data-facebook="login"><span>Login with Facebook</span></a>
            </div>
        </div>
        <div class="span4 offset2" id="signupbox">
            <header class="page-header">
                <h2>Sign Up</h2>
            </header>
            <h4><span>New customers sign up here</span></h4>
            <div id="newcustomertext">
                <div>In order to book a class</div>
                <div>you must sign up</div>
                <div>for a user account</div>
            </div>
            <div class="control-actions">
                <a href="/reserve/index.cfm?action=Account.new" class="btn"> Sign up </a>
            </div>
            <hr />
            <div class="control-group facebook-login">
                <a href="#" class="btn" data-facebook="login"><span>Sign Up with Facebook</span></a>
            </div>
        </div>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
