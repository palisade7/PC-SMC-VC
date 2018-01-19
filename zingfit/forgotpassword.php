<!DOCTYPE html>
<html id="forgotPassword" class="none">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>Reset Password</h1>
</div>
<div class="page-content">
    <div class="row">
        <form name="loginForm" id="loginForm" action="/reserve/index.cfm" method="POST" class="form-horizontal span8 offset2" onsubmit="return _CF_checkloginForm(this)">
            <input type="hidden" name="action" value="Account.emailPasswordReset" />
            <div id="usernamerow" class="control-group required ">
                <label class="control-label" for="username">Email</label>
                <div class="controls">
                    <input name="username" id="username" type="text" size="20" class="formFields" />
                    <span class="help-block">Enter your email address and<br/>we'll send you instructions to reset your password</span>
                </div>
            </div>
            <div class="form-actions">
                <input name="_submit" id="_submit" type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
document.loginForm.username.focus();
</script>
<?php require_once( 'includes/tail.php'); ?>
