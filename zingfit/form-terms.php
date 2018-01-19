<!DOCTYPE html>
<html id="formentry" class="reserve">
<?php require_once( 'includes/head.php'); ?>

<div class="page-header">
    <h1>terms and conditions</h1>
</div>
<div class="page-content">
    <div class="row">
        <form name="formForm" action="/reserve/index.cfm?action=Form.save" method="post" class="span8 offset2" id="formForm">
            <input type="hidden" name="id" value="4" />
            <div id="item10row" class="control-group ">
                <label class="control-label" for="item10">how did you find us?</label>
                <div class="controls">
                    <input type="text" name="item10" value="" maxlength="50" />
                </div>
            </div>
            <div id="item11row" class="control-group required ">
                <label class="control-label" for="item11">Please sign here</label>
                <div class="controls">
                    <div id="signaturebox">
                        <canvas id="item11canvas" class="signature"></canvas>
                        <div class="help-block">Use your mouse, trackpad or touch screen to sign.</div>
                        <p class="text-right" id="item11buttons"><a href="javascript:{}" class="btn btn-danger disabled">Clear</a> </p>
                        <input type="hidden" name="item11" value="" required>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php require_once( 'includes/tail.php'); ?>
<script src="static/scripts.js?mod=64618C59-AD60-7AAF-38BE1B61BC0783B4" type="text/javascript"></script>
<script src="static/signature_pad.min.js"></script>
<script>
$(document).ready(function(e) {
    var canvas = document.getElementById("item11canvas");
    var signaturePad = new SignaturePad(canvas, {
        onEnd: function() {
            if (!signaturePad.isEmpty()) {
                $('#item11buttons a').removeClass('disabled');
                var data = signaturePad.toDataURL();
                $('input[name=item11]').val(data);
            }
        }
    });
    $('#item11buttons a.btn-danger').click(function(event) {
        signaturePad.clear();
        $('input[name=item11]').val('');
        $('#item11buttons a').addClass('disabled');
    });

    function resizeitem11Canvas() {
        var ratio = window.devicePixelRatio || 1;
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }
    window.onresize = resizeitem11Canvas;
    resizeitem11Canvas();
});
</script>
