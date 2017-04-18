<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="leCalc" class="banner leCalc-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">LE Calculator</h1>
			<h2 class="banner-subheader">Title insurance for all refinance transactions is quoted at the reduced reissue rate.</h2>
		</div>
	</section>

	<section id="contactUsSEction" class="section section-white">
		<div class="row">
			<div class="large-8 large-centered columns">
				If there are any questions or concerns please <a href="#contact-us">contact us</a> or email us at info@krisslawatlantic.com.
			</div>
			<hr />
		</div>
		<iframe id="leCalcIframe" width="780" height="830" src="http://www.smartgfecalculator.com/Widget?clientKey=610d11c8-b46c-4d1d-b5a1-486e1411b492" frameborder="0"></iframe>
		<hr />
		<div class="row">
			<div class="large-8 center large-centered columns">
				Good faith estimate calculator powered by ProGFE Calculator ©2011
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