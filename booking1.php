<?php
	require_once("admin/phpscripts/init.php");
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Booking Info</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Booking Info</h1>
	<?php
		include("includes/header.html");
	?>

	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[images/bookBg-S.jpg, small], [images/bookBg-M, medium], [images/bookBg-L.jpg, large]">
			<h2 class="hidden">Booking &amp; Navigation</h2>
			<div class="small-12 columns adminBar">
				<a href="admin/admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
                <?php
                	include("includes/nav.html");
                ?>
                <?php
                	include("includes/book.html");
                ?>
            </nav>   
        </div>
        
        <div class="bodyCon">
			<div class="headSpace">
				<ul class="conNav">
                    <li><a href="">519-797-5862</a></li>
					<li><a href="">Free 1-866-797-5862</a></li>
                </ul>
			</div>
			<div class="subMenu">
                <ul class="subNav">
                    <li><a href="booking.php">Booking Info</a></li>
					<li><a href="schedule.php">Schedule &amp; Rates</a></li>
                </ul>
            </div>
			<div id="bookAtour" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>Book a Tour</h2>
				</div>
				<div class="small-12 medium-12 large-7 columns">
					<img src="images/book1.jpg" alt="book1">
					<span class="photo">Photo by Wayne MacDonald</span>
				</div>
				<div class="small-12 medium-12 large-5 columns">
					<div class="small-12 columns bookChantry">
						<p>For now, we will <span class="redStrong">not offer online booking of tours.</span> All tour bookings must be done by calling the Chantry Island Tour Base and Gift Shop phone number after May 1. <span class="redStrong">Pre-book to avoid disappointment.</span></p>
						<h3>Call: 519-797-5862</h3>
						<h3>Toll: Free 1-866-797-5862</h3>
					</div>
					<div class="small-12 columns arriveChantry">
						<h2>When and Where to Arrive</h2>
						<p>Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (See Maps) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.</p>
						<a href="map.html" onClick="return popUp('map.html')">See Map</a>
					</div>
				</div>
			</div>
            
			<div id="tourInfo" class="small-10 small-centered columns row">
				<div class="small-12 medium-12 large-6 columns bookImage">
					<h2>Tour Information</h2>
					<p>The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view. For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult. Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.</p>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<img src="images/book2.jpg" alt="book2">
				</div>
			</div>
			<div id="alsoNote" class="small-10 small-centered columns row">
				<div class="small-12 columns">
					<h2>Also Note:</h2>
				</div>
				<div class="small-12 medium-12 large-5 columns">
					<img src="images/book3.jpg" alt="book3">
				</div>
				<div class="small-12 medium-12 large-7 columns note">
					<p>The 2 hour tour must be pre-booked and prepaid.
There are 9 seats on the boat. The cost is $30.00 per person (includes HST).
For refunds, cancellations must be received 24 hours before the scheduled departure.
Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island.
Cancellation can be caused by weather conditions but light rain is fine.</p>
				</div>
			</div>
		</div>
		<div class="small-12 columns row sponcer">
        	<div class="small-6 medium-4 large-2 large-offset-1 columns sponPlace">
        		<a href="http://www.saugeenshores.ca/en/index.asp" title="The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce. Let this website help you plan your visit when you come to tour Chantry Island.">
        			<img src="images/sponcer1.jpg" alt="sponcer1" class="sponImg">
        		</a>
				<p>The Saugeen Shores</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace">
				<a href="http://www.brucemuseum.ca/" title="The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history. Check out their awesome Marine Gallery.">
        			<img src="images/sponcer2.jpg" alt="sponcer2" class="sponImg">
        		</a>
				<p>The Bruce County Museum and Cultural Centre</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace" title="Enjoy the Bruce Coast Lighthouse tour.">
				<a href="http://www.brucecoastlighthouses.com/">
        			<img src="images/sponcer3.jpg" alt="sponcer3" class="sponImg">
        		</a>
				<p>the Bruce Coast Lighthouse tour</p>
			</div>
			<div class="small-6 medium-4 large-2 columns sponPlace" title="Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.">
        		<a href="http://explorethebruce.com/">
        			<img src="images/sponcer4.jpg" alt="sponcer4" class="sponImg">
        		</a>
				<p>Explore the Bruce</p>
			</div>
			<div class="small-6 small-pull-6 medium-4 medium-pull-4 large-2 large-pull-1 columns sponPlace">
				<a href="http://www.southamptontennisclub.ca/" title="The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.">
        			<img src="images/sponcer5.jpg" alt="sponcer6" class="sponImg">
        		</a>
				<p>The Southampton Tennis Club</p>
			</div>
		</div>
        <?php
        	require_once("includes/footer.html");
        ?>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
