<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="Content-Style-Type" content="text/css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet"><link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    <link href="static/basestyles.css?mod=4" rel="stylesheet"><link href="static/mobile.css?m=1" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta property="og:title" content="Login">
        <meta property="og:site_name"  content="zingFit">
        <meta property="og:description" content="">
        <meta property="og:image" content="http://demo.zingfit.com/assets/zingdemo/">
        <meta property="fb:app_id" content="433495413420920">  <link href="pub/zingdemo/styles/style.css" type="text/css" rel="stylesheet">
    <link href="pub/zingdemo/styles/theme.css" type="text/css" rel="stylesheet">
    <link href="pub/zingdemo/styles/external-pages.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Brand Fonts -->
    <link rel="stylesheet" type="text/css" href="../fonts/RM-Pro/web/vortex.css">
    <link rel="stylesheet" type="text/css" href="../fonts/Bank-Gothic/bankgothic.css">
</head>
     
<body>

 <!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-flex justify-content-between" id="navbarsExampleDefault">
            <ul class="navbar-nav social">
                <li class="nav-item active channel-1">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item channel-2">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item channel-3">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item channel-4">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item channel-5">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item explore">
                    <a class="nav-link" href="#">Explore <span>+</span></a>
                    
                    <ul>
                    	<li><a href="../classes.html">Classes</a></li>
                    	<li><a href="../athletes.html">Athletes</a></li>
                    	<li><a href="../refuel.html">Refuel</a></li>
                    	<li><a href="../giving-back.html">Giving Back</a></li>
                    	<li><a href="../about.html">About</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                    </ul>
                </li>
            </ul>

			<a class="logo navbar-brand" href="../index.html"><img src="../images/Logo.png" alt=""></a>

           	<ul class="nav float-right">
				<li class="nav-item">
					<a class="nav-link" href="zingfit/choose-series.php">Buy</a>
				</li>
         		<li class="nav-item">
					<a class="nav-link" href="zingfit/account-login.php">Sign In / Up</a>
				</li>
           		<a class="btn btn-primary" href="zingfit/buy-series.php" role="button">Book a Class</a>
           	</ul>
        </div>
    </nav> 
    
<div id="wrap"> 
<!--<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner"> 
			<div class="container">
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Class Booking<b class="caret"></b></a>

							<ul class="dropdown-menu">
								<li><a href="reserve.php">Schedule</a></li>
								<li><a href="account-signup.php">Account Sign-up</a></li>
								<li><a href="account-login.php">Account Log-in</a></li>
								<li><a href="forgotpassword.php">Forgot Password</a></li>
								<li><a href="form-terms.php">Form Terms</a></li>
								<li><a href="choose-spot.php">Choose Spot</a></li>
								<li><a href="choose-series.php">Choose Series</a></li>
								<li><a href="take-payment.php">Take Payment</a></li>
								<li><a href="purchase-confirmation.php">Purchase Confirmation</a></li>
								<li><a href="series-terms.php">Series Terms</a></li>
								<li><a href="my-classes-confirm-booking.php">Booking Confirmation</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Gift Cards<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="gift-card.php">Gift Cards</a></li>
								<li><a href="gift-card-preview.php">Gift Card Preview</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Metrics<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="my-performance.php">My Performance</a></li>
								<li><a href="my-metrics.php">My Metrics</a></li>
								<li><a href="leaderboard-class.php">Leaderboard Class</a></li>
								<li><a href="leaderboard-monthly.php">Leaderboard Monthly</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Other<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="workshops.php">Workshops</a></li>
								<li><a href="referafriend.php">Refer a Friend</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="buy-series.php">Buy Series</a></li>
								<li><a href="my-classes.php">My Classes</a></li>
								<li><a href="my-series.php">My Series</a></li>
								<li><a href="my-metrics.php">My Performance</a></li>
								<li><a href="my-info.php">My Info</a></li>
								<li><a href="reserve.php">Reserve</a></li>
								 <li class="divider"></li>
								<li><a href="signin.php">Logout</a></li>
								<HR>
								<li><a href="account-regionaccess.php">Profile Access (Regions)</a></li>
								<li><a href="save-card.php">Save New Card</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>     
-->
           
    <div class="container content-wrap"> 
    	<div id="container">
        	<div id="content" role="main">
