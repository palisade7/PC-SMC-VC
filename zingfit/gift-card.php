<!DOCTYPE html>
<html id="new" class="reserve">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>Buy a Gift Card</h1>
</div>
<div class="page-content">
    <div id="giftCardForm" class="row">
        <div id="giftCardSidebar" class="span3 offset1">
            <div class="thumbnail" id="giftCardImage"> <img src="http://demo.zingfit.net/static/images/giftcard.png"> </div>
            <form onSubmit="return _CF_checkbalanceForm(this)" class="well" method="post" action="#" id="giftCardBalance" name="balanceForm">
                <h4>Check Your Balance</h4>
                <div class="control-group " id="fromnamerow">
                    <label for="fromname" class="control-label">Gift Card Code</label>
                    <div class="controls">
                        <input type="text" class="text" value="" name="code">
                        <br>
                    </div>
                </div>
                <div class="control-group " id="fromnamerow">
                    <label for="fromname" class="control-label">PIN</label>
                    <div class="controls">
                        <input type="text" maxlength="4" class="text" value="" name="pin">
                        <br>
                        <br>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" value="Check Balance" id="_submit" name="_submit">
                </div>
                <div id="giftCardBalanceResult"></div>
            </form>
        </div>
        <form onSubmit="return _CF_checkgcForm(this)" class="form-horizontal span6" method="post" action="gift-card-preview.php" id="gcForm" name="gcForm">
            <h3>Personalize your gift card</h3>
            <div class="control-group required " id="valuerow">
                <label for="value" class="control-label">Card Value</label>
                <div class="controls">
                    <select class="pull-left" onChange="enterValue(this)" name="valueselect">
                        <option value="">select from series prices</option>
                        <optgroup label="Cycle">
                            <option value="28">$28.00 (1 Class)</option>
                            <option value="250">$250.00 (10 Classes)</option>
                            <option value="600">$600.00 (25 Classes)</option>
                            <option value="200">$200.00 (3 month unlimited)</option>
                            <option value="300">$300.00 (3 month unlimited)</option>
                        </optgroup>
                        <optgroup label="Barre">
                            <option value="200">$200.00 (barre 10 pack)</option>
                        </optgroup>
                        <optgroup label="UNLIMITED SERIES">
                            <option value="200">$200.00 (ALL IN ONE)</option>
                        </optgroup>
                    </select>
                    <div class="input-prepend left-spacer10"> <span class="add-on">$</span>
                        <input type="text" class="span1" id="value" maxlength="5" name="value">
                    </div>
                    <div class="help-block">Select or enter a value between $20 and $3000</div>
                </div>
            </div>
            <div class="control-group required " id="fromnamerow">
                <label for="fromname" class="control-label">From</label>
                <div class="controls">
                    <input type="text" placeholder="your name" maxlength="28" id="fromname" name="fromname">
                </div>
            </div>
            <div class="control-group required " id="tonamerow">
                <label for="toname" class="control-label">To</label>
                <div class="controls">
                    <input type="text" placeholder="recipient's name" maxlength="28" id="toname" name="toname">
                </div>
            </div>
            <div class="control-group required " id="headlinerrow">
                <label for="headliner" class="control-label">Title</label>
                <div class="controls">
                    <select onChange="enterHeadline(this)" name="headlineselect">
                        <option value="">- select a title or enter your own -</option>
                        <option value="Happy Birthday!">Happy Birthday!</option>
                        <option value="Happy Holidays!">Happy Holidays!</option>
                        <option value="Thank You!">Thank You!</option>
                        <option value="Congratulations!">Congratulations!</option>
                    </select>
                    <br>
                    <input type="text" id="headline" size="30" maxlength="30" name="headline">
                    <div class="help-block">Select a title or enter your own above</div>
                </div>
            </div>
            <div class="control-group required " id="messagerow">
                <label for="message" class="control-label">Personal Message</label>
                <div class="controls">
                    <textarea id="message" name="message"></textarea>
                    <div class="help-block">500 characters or less</div>
                </div>
            </div>
            <h3>Select your delivery method</h3>
            <div class="control-group required " id="forprintrow">
                <label for="forprint" class="control-label">Method</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" checked="checked" value="0" id="forprint" name="forprint"> Email </label>
                    <label class="radio inline">
                        <input type="radio" value="1" id="forprint" name="forprint"> Print </label>
                    <div id="forprintnote" class="help-block hidden">After purchase the card will be available for printing.</div>
                </div>
            </div>
            <div class="control-group required " id="toemailrow">
                <label for="toemail" class="control-label">Recipient's Email</label>
                <div class="controls">
                    <input type="text" maxlength="150" id="toemail" name="toemail">
                </div>
            </div>
            <div class="control-group required " id="deliverydaterow">
                <label for="deliverydate" class="control-label">Email Delivery Date</label>
                <div class="controls">
                    <select name="deliverydate">
                        <option value="3/20/14">immediately</option>
                        <option value="3/21/14">Fri, Mar 21</option>
                        <option value="3/22/14">Sat, Mar 22</option>
                        <option value="3/23/14">Sun, Mar 23</option>
                        <option value="3/24/14">Mon, Mar 24</option>
                        <option value="3/25/14">Tue, Mar 25</option>
                        <option value="3/26/14">Wed, Mar 26</option>
                        <option value="3/27/14">Thu, Mar 27</option>
                        <option value="3/28/14">Fri, Mar 28</option>
                        <option value="3/29/14">Sat, Mar 29</option>
                        <option value="3/30/14">Sun, Mar 30</option>
                        <option value="3/31/14">Mon, Mar 31</option>
                        <option value="4/1/14">Tue, Apr 1</option>
                        <option value="4/2/14">Wed, Apr 2</option>
                    </select>
                    <div class="help-block">Gift card email delivery can be scheduled up to two weeks in advance</div>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" class="btn btn-primary" value="Submit" id="_submit" name="_submit">
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
