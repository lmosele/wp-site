<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="homeBanner" style="background-image:url('./dist/img/banner-image-desktop.jpg');" class="banner home-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Your Closing Professionals</h1>
			<h2 class="banner-subheader">Residential real estate closing and escrow services made simple and affordable.</h2>
			<a class="blue-button" id="mainBannerButton" href="#">Get A Quote</a>
			<a class="ghost-button white" id="secondaryBannerButton" href="#">Fee Calculator</a>
		</div>
		<div class="banner-callout large-4 columns"></div>
	</section>

	<section id="homeValueProp" class="section section-white row">
		<div class="large-8 large-centered columns center">
			<h3 class="section-headline">Kriss Law is here to help.</h3>
			<h4 class="section-subheader">We realize that many see the closing process as a difficult endeavor. </h4>
			<p class="section-paragraph">
				At Kriss Law, we aim to simplify it for our clientele. From reasonable fees, to our willingness to conduct a closing at a client’s convenience, we firmly believe that our service makes us different. No matter who you are or what stage of the process you’re in, we’re here to help you:
			</p>
			<p class="section-subtitle">Click to see our services for each category:</p>
			<ul class="value-prop-links row">
				<li class="large-3 columns">
					<a class="value-prop-link-item" href="#">
						<?php echo file_get_contents("./dist/img/vector/briefcase.svg"); ?>
						<span>Lenders</span>
					</a>
				</li>
				<li class="large-3 columns">
					<a class="value-prop-link-item" href="#">
						<?php echo file_get_contents("./dist/img/vector/hands.svg"); ?>
						Real Estate Agents
					</a>
				</li>
				<li class="large-3 columns">
					<a class="value-prop-link-item" href="#">
						<?php echo file_get_contents("./dist/img/vector/wallet.svg"); ?>
						Buyers				
					</a>
				</li>
				<li class="large-3 columns">
					<a class="value-prop-link-item" href="#">
						<?php echo file_get_contents("./dist/img/vector/calculator.svg"); ?>
						Sellers	
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section id="homeTeamIntro" class="section section-blue no-pad row">
		<div class="large-5 columns team-tile-image"></div>
		<div class="large-7 columns">
			<h3 class="section-headline">About Us</h3>
			<p class="section-paragraph">
				Kriss Law specializes in residential conveyance. We have built our business on servicing our clients in new and innovative ways. We realize that many see the closing process as a difficult endeavor. At Kriss Law, we aim to simplify it for our clientele. From reasonable fees, to our willingness to conduct a closing at a client’s convenience, we firmly believe that our service makes us different.
			</p>
			<p class="section-paragraph">
				Atlantic Closing & Escrow, LLC is a member of the Kriss Law family bringing the Kriss Law philosophy of superior service, commitment, and affordable pricing to all 50 States.
			</p>
			<div class="button-row">
					<a class="ghost-button white" href="#">Locations</a>
					<a class="ghost-button white" href="#">Contact Us</a>
					<a class="ghost-button white" href="#">Meet The Team</a>
					<a class="ghost-button white" href="#">Careers</a>
			</div>
		</div>
	</section>

	<section id="homeAwards" class="section section-white row">
		<div class="large-8 large-centered columns">
			<h3 class="section-headline">Our Reputation</h3>
			<div class="home-slider">
		    <div>your content</div>
		    <div>your content</div>
		    <div>your s</div>
		    <div>your s</div>
		    <div>your content</div>
		    <div>your content</div>
		    <div>your s</div>
		    <div>your as</div>
		    <div>your content</div>
		  </div>
		</div>
	</section>


	<div id="newsBar" class="news-event-bar row fullwidth">
		<div class="large-8 large-centered columns">
			<!-- slider -->
			
		</div>
	</div>

	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="dist/js/slick/slick.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>