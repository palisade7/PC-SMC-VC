<!DOCTYPE html>
<html id="referralMessage" class="account">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>Refer A Friend</h1>
</div>
<div class="page-content">
    <div class="row" id="referralForm">
        <form name="refForm" id="refForm" action="my-info.php" method="post" class="form-horizontal span8 offset2" onsubmit="return _CF_checkrefForm(this)">
            <h4>For each friend that signs up through your referral link and takes 50 classes you will receive $10 in credit towards the purchase of a series or in-studio merchandise.</h4>
            <h4>This is your referral link.</h4>
            <pre id="referrallink">http://demo.zingfit.com/reserve/index.cfm?action=Account.new&amp;r=c</pre>
            <h4>Share your link</h4>
            <div id="referralsocial">
                <a href="#" onclick="fbShareClass('zingFit', '', '')" title="Share on Facebook" class="btn fb"><i class="fa fa-facebook"></i> Share on Facebook</a>
                <a href="https://twitter.com/intent/tweet?url=&text=Sign up with me at zingFit" title="Tweet" class="btn"><i class="fa fa-twitter"></i> Share on Twitter</a>
            </div>
            <h4>Email your link</h4>
            <div id="toemailrow" class="control-group required ">
                <label class="control-label" for="toemail">To</label>
                <div class="controls">
                    <input name="toemail" id="toemail" type="text" placeholder="recipient's email address" />
                    <div class="help-block">separate multiple addresses with commas</div>
                </div>
            </div>
            <div id="messagerow" class="control-group required ">
                <label class="control-label" for="message">Personal Message</label>
                <div class="controls">
                    <textarea name="message" id="message"></textarea>
                    <div class="help-block">500 characters or less</div>
                </div>
            </div>
            <div class="form-actions">
                <div id="referralformterms"></div>
                <input name="_submit" id="_submit" type="submit" value="Send" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
<script src="//platform.twitter.com/widgets.js"></script>
<script>
function fbShareClass(name, caption, link) {
    FB.ui({
        method: 'feed',
        name: name,
        link: link,
        //caption: '',
        description: '',
        actions: {
            name: 'Sign Up',
            link: link
        }
    }, function(response) {
        registerShare('facebook');
    });
}
twttr.ready(function(twttr) {
    twttr.events.bind('tweet', function(event) {
        registerShare('twitter');
    });
});

function registerShare(source) {
    $.ajax({
        type: 'POST',
        url: '/reserve/index.cfm?action=Account.logReferralShare',
        data: {
            source: source
        }
    });
}
</script>
