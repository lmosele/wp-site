<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="titleBanner" style="background-image:url('./dist/img/banner-image-lender.jpg');" class="banner lenders-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Lenders</h1>
			<h2 class="banner-subheader">placeholder text</h2>
		</div>
	</section>

	<section id="lenderValueProp" class="section section-blue value-prop row">
		<div class="large-8 large-centered columns center">
			<h3 class="valueprop-header">We serve over 100 national and local mortgage lenders across the nation.</h3>
			<img class="valueprop-image" src="./dist/img/lenders-map.svg">

		 	<!-- this isnt proper html but whatever -->
			<button class="valueprop-link" href="#mainContent">Read More</button>
		</div>
	</section>

	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>