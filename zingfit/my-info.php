<!DOCTYPE html>
<html id="info" class="account">
<?php require_once( 'includes/head.php'); ?>

<div id="dashboard" class="page-content">
    <h3>Credit On File</h3>
    <div class="clearfix">
        <div class="span2 well short">
            <div class="panel-header">
                <h4 class="capitalize">series only credit</h4></div>
            <div class="panel-content clearfix unlimited">
                <h2>$50.00</h2>
            </div>
        </div>
        <div class="span2 well short">
            <div class="panel-header">
                <h4>General Use Credit</h4></div>
            <div class="panel-content clearfix unlimited">
                <h2>$47.90</h2>
            </div>
        </div>
    </div>

    <div id="power-metrics">
        <h3>Recent Performance</h3>
        <div class="panel-link"><a href="my-metrics.php">more detail</a></div>
        <p>
            <small>Here are the results for your last ride &raquo;</small> Thu 6/25/15 - 9:30 AM with Crystal
            <span class="panel-social"></span>
        </p>
        <h4>LeaderBoard Ranking</h4>
        <div class="clearfix">
            <div class="span2 well short rank panel-badge">
                <div class="panel-header">
                    <h4>This Class</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline">&gt; <a href="leaderboard-class.php" role="button" class="lb" data-toggle="modal" data-target="#modal" title="view ride leaderboard">view Leaderboard</a></div>
                        <div class="panel-data">
                            <div class="panel-number"><span style="font-size:50%;color:#999">#</span>1</div>
                            <div class="panel-label">PLACE
                                <br>
                                <span class="panel-avg"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span2 well short rank panel-badge">
                <div class="panel-header">
                    <h4>This Month</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix" id="lb-monthly">
                        <div class="sparkline">&gt; <a href="leaderboard-monthly.php" role="button" class="lb" data-toggle="modal" data-target="#modal" title="view ride leaderboard">view Leaderboard</a></div>
                        <div class="panel-data">
                            <div class="panel-number"></div>
                            <div class="panel-label">PLACE
                                <br>
                                <span class="panel-avg"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4>Performance Metrics</h4>
        <div class="clearfix">
            <div class="span2 well">
                <div class="panel-header">
                    <h4>RPM</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklineRPMa"></div>
                        <div class="panel-data">
                            <div class="panel-number">63</div>
                            <div class="panel-label">average
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">70</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">77</a></span></div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklineRPMm"></div>
                        <div class="panel-data">
                            <div class="panel-number">109</div>
                            <div class="panel-label">max
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">122</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">129</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span2 well">
                <div class="panel-header">
                    <h4>Power</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklinePOWa"></div>
                        <div class="panel-data">
                            <div class="panel-number">197</div>
                            <div class="panel-label">average
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">106</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">197</a></span></div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel-inner clearfix">
                        <div class="sparkline"><span id="sparklinePOWm"></span></div>
                        <div class="panel-data pd-tops">
                            <div class="panel-number">502</div>
                            <div class="panel-label">max
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">275</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">502</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="span2 well short">
                <div class="panel-header">
                    <h4>Total Energy</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklineENE"></div>
                        <div class="panel-data">
                            <div class="panel-number">528</div>
                            <div class="panel-label">total
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">280</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">528</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span2 well short">
                <div class="panel-header">
                    <h4>Miles</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklineMIL"></div>
                        <div class="panel-data">
                            <div class="panel-number">14</div>
                            <div class="panel-label">total
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">15</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">16</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span2 well short">
                <div class="panel-header">
                    <h4>Calories</h4>
                </div>
                <div class="panel-content">
                    <div class="panel-inner clearfix">
                        <div class="sparkline" id="sparklineCAL"></div>
                        <div class="panel-data">
                            <div class="panel-number">688</div>
                            <div class="panel-label">total
                                <br>
                                <span class="panel-avg"><a href="#" rel="zingtip" title="Last 6 rides">448</a></span>/<span class="panel-tops"><a href="#" rel="zingtip" title="best performance">688</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="capitalize">Active series</h3>
    <div class="panel-link"><a href="my-series.php">more detail</a></div>
    <div class="clearfix">
        <div id="seriesCarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>Free Community Class</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">act:
                                <br/>7/6/15</div>
                            <div class="panel-data">
                                <div class="panel-number">1</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>10 Classes</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">exp:
                                <br />8/5/15</div>
                            <div class="panel-data">
                                <div class="panel-number">10</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>5-pack</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">exp:
                                <br />7/24/15</div>
                            <div class="panel-data">
                                <div class="panel-number">5</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>Cycle Workshop</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">act:
                                <br/>6/28/15</div>
                            <div class="panel-data">
                                <div class="panel-number">1</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>10 Classes</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">act:
                                <br/>6/29/15</div>
                            <div class="panel-data">
                                <div class="panel-number">7</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                    <div class="span2 well series">
                        <div class="panel-header">
                            <h4>10 Classes</h4></div>
                        <div class="panel-content clearfix">
                            <div class="sparkline expire">act:
                                <br/>6/29/15</div>
                            <div class="panel-data">
                                <div class="panel-number">7</div>
                                <div class="panel-label">remain</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="right carousel-control" href="#seriesCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <h3>Loyalty Program</h3>
    <div class="clearfix">
        <div id="trackerCarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="span2 well short series">
                        <div class="panel-header">
                            <h4>4 Classes, 1 FREE!</h4></div>
                        <div class="panel-content clearfix unlimited">
                            <div class="sparkline expire">ends:
                                <br/>1/1/16</div>
                            <div class="panel-data">
                                <div class="panel-number">1</div>
                                <div class="panel-label">Classes taken</div>
                            </div>
                        </div>
                    </div>
                    <div class="span2 well short series">
                        <div class="panel-header">
                            <h4>100 Classes!</h4></div>
                        <div class="panel-content clearfix unlimited">
                            <div class="sparkline expire">ends:
                                <br/>5/31/16</div>
                            <div class="panel-data">
                                <div class="panel-number">32</div>
                                <div class="panel-label">Classes taken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3>Your Achievements</h3>
    <div class="clearfix">
        <div id="rewardsCarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="span2 well short panel-badge">
                        <div class="panel-header">
                            <h4>100 Classes!</h4></div>
                        <div class="panel-content clearfix unlimited">
                            <div class="sparkline expire">achieved:
                                <br/>10/4/14</div>
                            <div class="panel-data">
                                <div class="panel-number">100</div>
                                <div class="panel-label">classes taken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3>My Info</h3>
    <div class="clearfix">
        <div class="panel-link"><a href="account-signup.php">edit info</a></div>
        <div id="customerinfo" class="span5 grid">
            <div class="row">
                <div class="span1 gridlabel">Name</div>
                <div class="span4">Test Account</div>
            </div>
            <div class="row">
                <div class="span1 gridlabel">Address</div>
                <div class="span4">
                    1 Main Street
                    <br/> East Hampton, NY 11937
                </div>
            </div>
            <div class="row">
                <div class="span1 gridlabel">Phone</div>
                <div class="span4">631 604-2385</div>
            </div>
            <div class="row">
                <div class="span1 gridlabel">Email</div>
                <div class="span4">test@testing.com</div>
            </div>
            <div class="row">
                <div class="span1 gridlabel">Group</div>
                <div class="span4">
                    <div>VIP Group - Soft Opening</div>
                </div>
            </div>
            <div class="row" id="accesscontrol">
                <div class="span1"></div>
                <div class="span4">
                    <h6>Your profile is accessible to</h6> East Hampton
                    <br />San Francisco
                    <br /><a href="account-regionaccess.php"><small>Allow Other Studios</small></a>
                </div>
            </div>
            <div class="row controls">
                <div class="span1 gridlabel">&nbsp;</div>
                <div class="span4"></div>
            </div>
            <h3>Forms</h3>
            <table class="table account-listing" id="formresponses">
                <thead>
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-small" rel="tooltip" title="View" onclick="popup('form.html')"><i class="icon-zoom-in"></i></button>
                        </td>
                        <td>Jun 24, 2015</td>
                        <td>terms and conditions</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h3>Referrals</h3>
    <div class="panel-link"><a href="referafriend.php">invite a friend</a></div>
    <p>You do not have any referrals yet</p>
    <h3>Cards on File</h3>
    <div class="panel-link">
        <a href="save-card.php">add new card</a>
    </div>
    <table class="table account-listing" id="savedcardlisting">
        <thead>
            <tr>
                <th></th>
                <th>Type</th>
                <th>Number</th>
                <th>Expiration</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td class="action">
                    <div class="btn-group">
                        <button class="btn btn-primary" rel="tooltip" title="Edit" onclick="window.location='save-card.php'"><i class="icon-pencil icon-white"></i></button>
                        <button class="btn btn-primary" rel="tooltip" title="Delete" onclick="confirmThis('Are you sure you want to remove this card?', '')"><i class="icon-trash icon-white"></i></button>
                    </div>
                </td>
                <td>Visa</td>
                <td>XXXX1111</td>
                <td>11-15</td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="modal" class="modal hide fade">
    <div class="modal-body"></div>
    <div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Close</a></div>
</div>
<?php require_once( 'includes/tail.php'); ?>
<script src="static/jquery.sparkline.2.1.min.js"></script>
<script>
$(function() {
    $("#sparklineRPMa").sparkline([68, 70, 71, 72, 77, 63], {
        width: '76px',
        height: '45px'
    });
    $("#sparklineRPMm").sparkline([129, 129, 121, 129, 119, 109], {
        width: '76px',
        height: '45px'
    });
    $("#sparklinePOWa").sparkline([84, 71, 136, 116, 32, 197], {
        width: '76px',
        height: '45px'
    });
    $("#sparklinePOWm").sparkline([207, 233, 360, 213, 140, 502], {
        width: '76px',
        height: '45px'
    });
    $("#sparklineENE").sparkline([225.3, 190.5, 362.7, 309.3, 62.1, 528.4], {
        width: '76px',
        height: '45px'
    });
    $("#sparklineMIL").sparkline([15.1, 15.6, 15.9, 16.2, 12.4, 14.0], {
        width: '76px',
        height: '45px'
    });
    $("#sparklineCAL").sparkline([402, 362, 530, 475, 236, 688], {
        width: '76px',
        height: '45px'
    });

    $('a[rel=zingtip]').tooltip();
})
$('a[data-toggle="modal"]').live('click', function(e) {
    e.preventDefault();
    var modalid = $(this).attr('data-target');
    $(modalid).modal('show').appendTo($("body"));
    $(modalid + ' .modal-body').html('loading...').load(this.href);
});
$(document).on('click', '.modal-body a', function(e) {
    e.preventDefault();
    $(this).parents('.modal-body').html('loading...').load(this.href);
});
</script>
