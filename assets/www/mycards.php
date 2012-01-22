<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="jquery-mobile/jquery.mobile-1.0.min.css" />
		<script src="phonegap-1.3.0.js"></script>
		<script src="jquery-1.7.min.js"></script>
		<script src="jquery-mobile/jquery.mobile-1.0.min.js"></script>
	
		<!-- for jquery flip -->
		<link rel="stylesheet" type="text/css" href="css/flip.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.flip.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		
		<!-- Javascript -->
		<script type="text/javascript" charset="utf-8">
			function onLoad() {
				document.addEventListener("deviceready", onDeviceReady, false);
			}

			function onDeviceReady() {
				phoneGapReady.innerHTML = "PhoneGap is Ready";
			}
		</script>
		<!-- /Javascript-->
		
		
		<title>My Cards</title>
	</head>
	<body onload="onLoad();">
		<div id="page-home" class="page" data-role="page" data-theme="a">
			<div id="page-home-header" data-role="header">
				<h1>My MeMCards</h1>
			</div><!-- /header -->
			<div id="page-home-content" class="content" data-role="content">
				<p>
					MYCARDS CONTENTS GOES HERE
				</p>
			<!-- sponsorListHolder -->
			
<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('clubs_sobeys','Barcode is here','http://www.sobeys.com/')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
		    	<div class="clear"></div>
		    </div>

			<!-- /sponsorListHolder -->
			</div><!-- /content -->
			<div id="page-home-footer" class="footer" data-role="footer" data-position="fixed">
				<div id="page-home-navbar" data-role="navbar">
					<ul>
						<li>
							<a href="index.html" data-role="icon" data-icon="home">Home</a>
						</li>
						<li>
							<a href="mycards.php" data-role="icon" data-icon="grid">My Cards</a>
						</li>
						<li>
							<a href="settings.html" data-role="icon" data-icon="gear">Settings</a>
						</li>
						<li>
							<a href="search.html" data-role="icon" data-icon="search">Search</a>
						</li>
					</ul>
				</div><!-- /navbar -->
			</div><!-- /footer -->
		</div><!-- /page -->
	</body>
</html>