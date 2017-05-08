<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="sellerBanner" style="background-image:url('./dist/img/banner-image-seller.jpg');" class="banner seller-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Sellers</h1>
			<h2 class="banner-subheader">placeholder text</h2>
		</div>
	</section>

	<section id="sellerValueProp" class="section section-blue value-prop row">
		<div class="large-8 large-centered columns center">
			<h3 class="valueprop-header">We help sellers close deals without the hassle</h3>
			<img class="valueprop-image" src="./dist/img/sellers-bust.svg">

			<div class="valueprop-link">Read More about our experienced attorneys</div>
		</div>
	</section>

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
					<a href="#">Buyers</a>
				</li>
				<li class="services-nav-item">
					<a class="selected" href="#">Sellers</a>
				</li>
			</ul>

		</div>
		<div class="large-9 large-pull-1 columns">
			<h4 class="section-subheader">We have become known for our unparalleled service to the sellers with whom we deal.</h4>
			<p class="section-paragraph">
				If you are selling your home or about to embark on the process, Kriss Law and Atlantic Closing & Escrow, LLC's team of experienced real estate attorneys can assist you in making this sometimes stressful endeavor worry-free. By coupling the lowest fees in the areas in which we practice with the best service, it is no surprise that so many Sellers choose our attorneys to represent them in the home selling process.
			</p>
			
			<div class="button-row">
				<a href="#" class="orange-button">Contact Us</a>
				<a href="#" class="blue-button">Get A Quote</a>
				<a href="#" class="blue-button">Fee Calculator</a>
				<a href="#" class="ghost-button blue">Order A Title</a>
			</div>
		</div>
	</section>

	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>