<!DOCTYPE html>
<html id="gatewayaccount" class="reserve">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1 class="capitalize">Save New card</h1>
</div>
<div class="page-content">
    <div class="row">
        <form name="customerForm" id="customerForm" action="my-info.php" method="post" class="form-horizontal span8 offset2" onsubmit="return _CF_checkcustomerForm(this)">
            <input name="id" id="id" type="hidden" value="0" />
            <input name="gatewayid" id="gatewayid" type="hidden" value="1" />
            <div id="ccnumberrow" class="control-group required ">
                <label class="control-label" for="ccnumber">Card Number</label>
                <div class="controls">
                    <input name="ccnumber" id="ccnumber" type="text" maxlength="19" /> </div>
            </div>
            <div id="ccexpirationrow" class="control-group required ">
                <label class="control-label" for="ccexpiration">Expiration Date<span class='small'>(MMYY)</span></label>
                <div class="controls">
                    <input name="ccexpiration" id="ccexpiration" type="text" maxlength="4" size="6" /> </div>
            </div>
            <div id="ccfirstnamerow" class="control-group required ">
                <label class="control-label" for="ccfirstname">First Name</label>
                <div class="controls">
                    <input name="firstname" type="text" value="Test" maxlength="40" id="ccfirstname" /> </div>
            </div>
            <div id="cclastnamerow" class="control-group required ">
                <label class="control-label" for="cclastname">Last Name</label>
                <div class="controls">
                    <input name="lastname" type="text" value="Account" maxlength="40" id="cclastname" /> </div>
            </div>
            <div id="addressrow" class="control-group required ">
                <label class="control-label" for="address">Street Address</label>
                <div class="controls">
                    <input name="address" id="address" type="text" value="1 Main Street" maxlength="100" /> </div>
            </div>
            <div id="ziprow" class="control-group required ">
                <label class="control-label" for="zip"><span class='capitalize'>zip</span></label>
                <div class="controls">
                    <input name="zip" id="zip" type="text" value="11937" maxlength="10" /> </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Save</button>
                <button type="button" class="btn" name="cancel" onclick="window.location='my-info.php'">Cancel</button>
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
