<!DOCTYPE html>
<html id="billing" class="checkout">
<?php require_once( 'includes/head.php'); ?>

<div class="row">
    <div class="span8 offset2">
        <form name="promoForm" id="checkoutpromo" action="#" method="post" class="form-inline form-checkout panel-bordered" onsubmit="return _CF_checkpromoForm(this)">
            <input type="hidden" name="formtoken" value="7C5A3D18-FE23-EF01-D5A7040D23E45990" />
            <label>Apply Promo Code</label>
            <input type="text" name="promocode" value="" placeholder="Enter promo code" />
            <input type="submit" name="_submit" value="Apply" class="btn btn-primary" />
        </form>
        <form name="promoForm" id="checkoutgiftcard" action="#" method="post" class="form-inline form-checkout panel-bordered" onsubmit="return _CF_checkpromoForm(this)">
            <input type="hidden" name="formtoken" value="7C5A3D18-FE23-EF01-D5A7040D23E45990" />
            <label>Redeem Gift Card</label>
            <input type="text" name="giftcardcode" value="" placeholder="Gift Card Code" class="span2" />
            <input type="text" name="giftcardpin" value="" placeholder="PIN" class="span1" />
            <input type="submit" name="_submit" value="Redeem" class="btn btn-primary" />
        </form>
        <form name="savedCardForm" id="checkoutsavedcard" action="purchase-confirmation.php" method="post" class="form-checkout panel-bordered" onsubmit="return _CF_checksavedCardForm(this)">
            <input type="hidden" name="formtoken" value="7C5A3D18-FE23-EF01-D5A7040D23E45990" />
            <input type="hidden" name="savedcardid" id="savedcardid" value="" />
            <h3>Use Card On File</h3>
            <div id="savedcards" class="table">
                <div class="row-fluid">
                    <span class="span2">Visa</span>
                    <span class="span2">XXXX1111</span>
                    <span class="span8">
									<a href="purchase-confirmation.php" class="btn btn-small btn-primary">Place Order</a>
									<a href="javascript:{}" class="btn btn-small offset20">Remove Card</a>
								</span>
                </div>
            </div>
        </form>
        <form name="checkoutForm" id="checkoutbilling" action="purchase-confirmation.php" method="post" class="form-horizontal form-checkout panel-bordered" onsubmit="return _CF_checkcheckoutForm(this)">
            <input type="hidden" name="formtoken" value="7C5A3D18-FE23-EF01-D5A7040D23E45990" />
            <h3>Credit Card Information</h3>
            <div id="paymenttypeidrow" class="control-group ">
                <div class="controls">
                    <img src="static/images/cc_VISA.gif" />
                    <img src="static/images/cc_MasterCard.gif" />
                </div>
            </div>
            <div id="ccnumberrow" class="control-group required ">
                <label class="control-label" for="ccnumber">Card Number</label>
                <div class="controls">
                    <input name="ccnumber" id="ccnumber" type="text" maxlength="19" size="20" /> </div>
            </div>
            <div id="ccexpirationrow" class="control-group required ">
                <label class="control-label" for="ccexpiration">Expiration Date</label>
                <div class="controls">
                    <input name="ccexpiration" id="ccexpiration" type="text" maxlength="4" size="6" placeholder="MMYY" /> </div>
            </div>
            <div id="ccvrow" class="control-group required ">
                <label class="control-label" for="ccv">Security Code</label>
                <div class="controls">
                    <input name="ccv" id="ccv" type="text" maxlength="4" size="4" />
                    <a href="javascript:{}" onclick="popup('help-ccv.html')"><i class="icon-question-sign"></i></a>
                </div>
            </div>
            <div id="savecardrow" class="control-group required ">
                <label class="control-label" for="savecard">Save My Card</label>
                <div class="controls">
                    <input name="savecard" id="savecard" type="checkbox" value="1" />
                    <a href="javascript:{}" onclick="popup('help-savecard.html')" class="left-spacer10"><i class="icon-question-sign"></i></a>
                </div>
            </div>
            <h3>Billing Information</h3>
            <div id="billingfirstnamerow" class="control-group required ">
                <label class="control-label" for="billingfirstname">First Name</label>
                <div class="controls">
                    <input name="billingfirstname" id="billingfirstname" type="text" value="Test" maxlength="40" /> </div>
            </div>
            <div id="billinglastnamerow" class="control-group required ">
                <label class="control-label" for="billinglastname">Last Name</label>
                <div class="controls">
                    <input name="billinglastname" id="billinglastname" type="text" value="Account" maxlength="40" /> </div>
            </div>
            <div id="billingaddressrow" class="control-group required ">
                <label class="control-label" for="billingaddress">Street Address</label>
                <div class="controls">
                    <input name="billingaddress" id="billingaddress" type="text" value="1 Main Street" maxlength="50" /> </div>
            </div>
            <div id="billingziprow" class="control-group required ">
                <label class="control-label" for="billingzip">ZIP</label>
                <div class="controls">
                    <input name="billingzip" id="billingzip" type="text" value="11937" maxlength="10" /> </div>
            </div>
            <div class="form-actions">
                <input name="_submit" id="_submit" type="submit" value="Place Order" class="btn btn-primary" />
            </div>
        </form>
        <table cellspacing="0" cellpadding="5" align="center" id="ordersummary" class="ordersummary table panel-bordered" style="border-width:1px">
            <tbody>
                <tr>
                    <th width="360" colspan="2" style="text-align:left">Series</th>
                    <th width="80" style="text-align:center">Quantity</th>
                    <th width="80" style="text-align:right">Price</th>
                    <th width="80" style="text-align:right">Discount</th>
                    <th width="80" style="text-align:right">Subtotal</th>
                </tr>
                <tr>
                    <td colspan="2">
                        5 Classes - Local
                    </td>
                    <td style="text-align:center">1</td>
                    <td style="text-align:right">$80.00</td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right">$80.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="totalrow" id="subtotal">
                    <td colspan="5" style="text-align:right; font-weight:bold">Subtotal</td>
                    <td style="text-align:right; font-weight:bold">$80.00</td>
                </tr>
                <tr class="totalrow">
                    <td colspan="5" style="text-align:right; font-weight:bold">Total</td>
                    <td style="text-align:right; font-weight:bold">$80.00</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
