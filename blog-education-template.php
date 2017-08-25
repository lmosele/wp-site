<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="eventsBanner" class="banner events-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Continuing Education</h1>
		</div>
	</section>

	<section id="news" class="section section-white">
		<div class="row">

			<div class="large-8 medium-12 columns">
				<article class="section-post">
					<h4 class="section-subheader">
						<a href="./blog-post-template.php">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</a>
					</h4>
					<p class="section-subtitle post-type">April 17, 2017</p>
					<!-- can we do a post preview here? -->
					<p class="section-paragraph">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</p>
					<br />
					<a href="./blog-post-template.php" class="ghost-button blue">Read More</a>
				</article>

				<article class="section-post">
					<h4 class="section-subheader">
						<a href="./blog-post-template.php">Test Post Title</a>
					</h4>
					<p class="section-subtitle post-type">April 17, 2017</p>
					<!-- can we do a post preview here? -->
					<p class="section-paragraph">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</p>
					<br />
					<a href="./blog-post-template.php" class="ghost-button blue">Read More</a>
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