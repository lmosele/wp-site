<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="eventsBanner" class="banner events-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Events</h1>
		</div>
	</section>

	<section id="events" class="section section-white">
		<div class="row">

			<div class="large-8 columns">
				<h3 class="section-headline">Upcoming Events</h3>

				<article class="section-post event-post">
					<h4 class="section-subheader">
						<a href="./blog-post-template.php">On Call Attorney - Sunday, May 7, 2017</a>
					</h4>
					<p class="section-subtitle post-date">Date: May 4, 2017</p>
					<p class="section-subtitle post-location">Location: 8201 Peters Road Plantation, FL 33324</p>
				</article>

				<article class="section-post event-post">
					<h4 class="section-subheader">
						<a href="./blog-post-template.php">On Call Attorney - Sunday, May 7, 2017</a>
					</h4>
					<p class="section-subtitle post-date">Date: May 4, 2017</p>
					<p class="section-subtitle post-location">Location: 8201 Peters Road Plantation, FL 33324</p>
				</article>

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