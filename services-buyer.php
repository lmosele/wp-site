<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="buyerBanner" style="background-image:url('./dist/img/banner-image-buyer.jpg');" class="banner bbuyer-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Buyers</h1>
			<h2 class="banner-subheader">placeholder text</h2>
		</div>
	</section>


	<!-- ALTERNATIVE ORDERING OF SECTIONS, WHICH DO YOU THINK IS BEST? -->


	<section class="section section-white row">
		<div class="large-2 columns">

			<ul class="services-nav">
				<li class="services-nav-item">
					<a href="#">Lenders</a>
				</li>
				<li class="services-nav-item">
					<a href="#">Real Estate Agents</a>
				</li>
				<li class="services-nav-item">
					<a class="selected" href="#">Buyers</a>
				</li>
				<li class="services-nav-item">
					<a href="#">Sellers</a>
				</li>
			</ul>

		</div>
		<div class="large-9 large-pull-1 columns">
			<h4 class="section-subheader">Whether an experienced homeowner or first time buyer, we have your back.</h4>
			<p class="section-paragraph">
				At Kriss Law and Atlantic Closing & Escrow, LLC, we pride ourselves on representing Buyers of all kinds. From first time home-buyers to seasoned homeowners, we can meet all of your legal needs. Our experienced team will provide expert advice from the time your offer is accepted until the final document is signed at the closing.
			</p>
			
			<div class="button-row">
				<a href="#" class="blue-button">Get A Quote</a>
				<a href="#" class="blue-button">Fee Calculator</a>
				<a href="#" class="ghost-button blue">Order A Title</a>
			</div>
		</div>
	</section>

	<section id="sellerValueProp" class="section section-blue value-prop row">
		<div class="large-8 large-centered columns center">
			<h3 class="valueprop-header">Helping you close your dream home since 1994</h3>
			<img class="valueprop-image" src="./dist/img/buyer-handshake.svg">

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