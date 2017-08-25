<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section  class="banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">TITLE GOES HERE On Call Attorney - Sunday, May 7, 2017</h1>
		</div>
	</section>

	<section class="section section-white">
		<div class="row">
			<div class="large-8 columns">
				<!-- example image -->
				<img class="event-post-image" src="./dist/img/banner-image-seller.jpg">

				<p class="section-paragraph">
					At Kriss Law and Atlantic Closing & Escrow, LLC, we pride ourselves on representing Buyers of all kinds. From first time home-buyers to seasoned homeowners, we can meet all of your legal needs. Our experienced team will provide expert advice from the time your offer is accepted until the final document is signed at the closing.
				</p>
				<br/>
				<br/>
				<a class="blue-button" href="./events.php">< Back</a>
			</div>

			<div class="large-4 show-for-large-up columns separator-left">
				<h3 class="section-subheader">Questions or Concerns?</h3>
				<p class="section-subtitle">Reach out to us by clicking below, or call us directly at: 888-632-4939</p>
				<button class="orange-button fullwidth">Contact Us</button>
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