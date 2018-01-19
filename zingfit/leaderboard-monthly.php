<!DOCTYPE html>
<html id="gatewayaccount" class="reserve">
<?php require_once( 'includes/head.php'); ?>

<div class="page-content">
    <div class="row">
<h3>
	May 2015 <a href="#" class="btn btn-mini"><i class="icon-chevron-left"></i></a> <a href="#" class="btn btn-mini"><i class="icon-chevron-right"></i></a>
</h3>
<div class="btn-group pull-left" data-toggle="buttons-checkbox">
    <a class="btn btn-mini btn-primary active" href="#">All</a>
    <a class="btn btn-mini" href="#">Men Only</a>
    <a class="btn btn-mini" href="#">Women Only</a>
</div>
<div class="btn-group pull-right" data-toggle="buttons-checkbox">
    <a class="btn btn-mini btn-primary active" href="#">Total Energy/Lb</a>
    <a class="btn btn-mini" href="#">Total Energy</a>
    <a class="btn btn-mini" href="#">Cumulative Total Energy/Lb</a>
</div>
<table id="pd-history" class="table table-striped">
    <thead>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th class="right">Avg
                <br>Power</th>
            <th class="right">Avg
                <br>RPM</th>
            <th class="right">Hourly
                <br>Total Energy</th>
            <th class="right">Hourly
                <br>Total Energy/Lb</th>
            <th class="right">Cumulative
                <br />Total Energy/Lb</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Test Ac</td>
            <td class="right">74</td>
            <td class="right">74</td>
            <td class="right">248</td>
            <td class="right">4.265</td>
            <td class="right">6</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php require_once( 'includes/tail.php'); ?>
