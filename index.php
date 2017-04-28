

<?php echo file_get_contents("./src/modules/_head.php") ?>

<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="homeBanner" style="background-image:url('./dist/img/banner-image-desktop.jpg');" class="banner home-banner row fullwidth">
		<div class="banner-container large-7 columns">
			<h1 class="banner-header">Your Closing Professionals</h1>
			<h2 class="banner-subheader">Residential real estate closing and escrow services made simple and affordable.</h2>
			<a class="blue-button" id="mainBannerButton" href="#">Get A Quote</a>
			<a class="ghost-button white" id="secondaryBannerButton" href="/le-calculator.php">Fee Calculator</a>
		</div>
		<div class="large-5 columns">
			<div class="banner-callout right">
				<h3 class="callout-header">Need A Title? Kriss Law Can Help</h3>
				<p class="callout-body">Kriss Law guarantees accurate and timely order title delivery. Request one via our Title Order page:</p>
				<a class="ghost-button white" href="/order-title.php">Request Title</a>
			</div>
		</div>
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
		<div class="large-5 medium-12 columns team-tile-image"></div>
		<div class="large-7 medium-12 columns">
			<h3 class="section-headline">About Us</h3>
			<p class="section-paragraph">
				Kriss Law specializes in residential conveyance. We have built our business on servicing our clients in new and innovative ways. We realize that many see the closing process as a difficult endeavor. At Kriss Law, we aim to simplify it for our clientele. From reasonable fees, to our willingness to conduct a closing at a client’s convenience, we firmly believe that our service makes us different.
			</p>
			<p class="section-paragraph">
				Atlantic Closing & Escrow, LLC is a member of the Kriss Law family bringing the Kriss Law philosophy of superior service, commitment, and affordable pricing to all 50 States.
			</p>
			<div class="button-row">
					<a class="ghost-button white" href="#modal">Locations</a>
					<a class="ghost-button white" href="./contact-us.php">Contact Us</a>
					<a class="ghost-button white" href="#">Meet The Team</a>
					<a class="ghost-button white" href="#">Careers</a>
			</div>
		</div>
	</section>

<!-- 	<section id="homeAwards" class="section section-white row">
		<div class="large-8 large-centered columns">
			<h3 class="section-headline">Our Reputation</h3>
			<div class="home-slider">
				<img class="slider-images" src="./dist/img/logos/aicpa.png" />
				<img class="slider-images" src="./dist/img/logos/bankers-tradesman.png" />
				<img class="slider-images" src="./dist/img/logos/bbb-seal.png" />
				<img class="slider-images" src="./dist/img/logos/preferred-bostontop20.jpg" />
				<img class="slider-images" src="./dist/img/logos/redfin.png" />
				<img class="slider-images" src="./dist/img/logos/secure-settlements.gif" />
		  </div>
		</div>
	</section> -->


	<div id="newsBar" class="news-event-bar row fullwidth">
		<div class="large-8 large-centered columns">
			<div class="center">
				<a class="event-bar-link" href="#linktonewsitem">
					<span>April 14, 2017</span>
					On Call Lawyer
				</a>
			</div>
		</div>
	</div>

	<!-- directions modal -->
	<div class="remodal section modal" data-remodal-id="modal">
		<button data-remodal-action="close" class="remodal-close"></button>
		<h3 class="section-subheader">Office Locations</h3>
		<p class="section-paragraph">
			Click the links to see the maps and addresses:
		</p>
		<br>
		<?php include './src/modules/_addresses-list.php'; ?>
		<br>
		<br>
		<button data-remodal-action="cancel" class="ghost-button blue">Close</button>
	</div>

	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="dist/js/slick/slick.min.js"></script>
  <script type="text/javascript" src="dist/js/remodal.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>