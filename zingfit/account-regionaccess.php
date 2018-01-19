<!DOCTYPE html>
<html id="regionAccess" class="account">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>Profile Access</h1>
</div>
<div class="page-content">
    <div class="row" id="regionAccessForm">
        <form name="regForm" id="regForm" action="my-info.php" method="post" class="form-horizontal span8 offset2" onsubmit="return _CF_checkregForm(this)">
            <div id="regionigrow" class="control-group required ">
                <label class="control-label" for="regionig">Studios</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="regionid" value="1" /> Houston
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="regionid" value="4" /> Chicago
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" name="_submit" value="Save" class="btn btn-primary" />
                <input type="button" name="cancael" value="Cancel" class="btn" onclick="window.location='my-info.php'" />
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
