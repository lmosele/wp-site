<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="titleBanner" style="background-image:url('./dist/img/banner-image-lender.jpg');" class="banner lenders-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Lenders</h1>
			<h2 class="banner-subheader">placeholder text</h2>
		</div>
	</section>

	<section class="section section-white row">
		<div class="large-2 columns">

			<ul class="services-nav">
				<li class="services-nav-item">
					<a class="selected"  href="./services-lender.php">Lenders</a>
				</li>
				<li class="services-nav-item">
					<a href="./services-real-estate-agent.php">Real Estate Agents</a>
				</li>
				<li class="services-nav-item">
					<a href="./services-buyer.php">Buyers</a>
				</li>
				<li class="services-nav-item">
					<a href="./services-seller.php">Sellers</a>
				</li>
			</ul>

		</div>
		<div class="large-9 large-pull-1 columns">
			<h4 class="section-subheader">We have become known for our unparalleled service to the lenders with whom we deal.</h4>
			<p class="section-paragraph">
				Our closing services to our lenders include:
			</p>
			<!-- not sure how you treat markdown styling in WP, i just did this for now -->
			<ul class="reset-list">
				<li>Coverage of the entire States of Massachusetts, New Hampshire, Rhode Island and Connecticut as well as Maine, Washington D.C., Maryland and New York</li>
				<li>Quick title turnaround</li>
				<li>Our experienced closing staff will travel for closings anywhere at anytime, including Saturdays</li>
				<li>Competitive and sometimes negotiable fees</li>
				<li>We make ourselves available for last minute title search requests and closings</li>
				<li>Free buyer representation including free Purchase and Sale Agreement review</li>
				<li>Immediate, responsive service from all of our attorneys and paralegals</li>
				<li>A great lead and referral program that allows us to send business back to you</li>
				<li>Well developed Realtor relationships that allow us to offer you networking opportunities</li>
			</ul>
			<p class="section-paragraph">The bottom line is that a smooth transaction breeds more business for all parties involved. With that in mind, our attorneys and paralegals are the last people your clients deal with in a transaction and we assure a positive experience at that time.</p>
			
			<div class="button-row">
				<a href="#" class="orange-button">Contact Us</a>
				<a href="#" class="blue-button">Get A Quote</a>
				<a href="./le-calculator.php" class="blue-button">Fee Calculator</a>
				<a href="#" class="ghost-button blue">Order A Title</a>
			</div>
		</div>
	</section>

	<section id="lenderValueProp" class="section section-blue value-prop row">
		<div class="large-8 large-centered columns center">
			<h3 class="valueprop-header">We serve over 100 national and local mortgage lenders across the nation.</h3>
			<img class="valueprop-image" src="./dist/img/lenders-map.svg">

			<div class="valueprop-link"><a href="#" class="ghost-button white">Contact Us Today</a></div>
		</div>
	</section>

	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>