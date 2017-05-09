<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="eventsBanner" class="banner events-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">News & Events</h1>
			<h2 class="banner-subheader">Notable announcements, events, and offers from Kriss Law.</h2>
		</div>
	</section>

	<section id="careers" class="section section-white">
		<div class="row">

			<!-- announcements -->
			<div class="large-7 medium-12 columns">
				<h3 class="section-headline">Announcements</h3>

				<article class="section-post">
					<h4 class="section-subheader">
						<a href="./news-template.php">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</a>
					</h4>
					<p class="section-subtitle post-type">April 17, 2017</p>
					<!-- can we do a post preview here? -->
					<p class="section-paragraph">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</p>
					<br />
					<a href="./news-template.php" class="ghost-button blue">Read More</a>
				</article>

				<article class="section-post">
					<h4 class="section-subheader">
						<a href="./news-template.php">Test Post Title</a>
					</h4>
					<p class="section-subtitle post-type">April 17, 2017</p>
					<!-- can we do a post preview here? -->
					<p class="section-paragraph">All Kriss Law/Atlantic Massachusetts Offices Closed On Monday, April 17, 2017 In Observance Of Patriots Day</p>
					<br />
					<a href="./news-template.php" class="ghost-button blue">Read More</a>
				</article>

			</div>

			<!-- events -->
			<div class="large-4 columns separator-left">
				<h3 class="section-headline">Events</h3>

				<article class="section-post event-post">
					<h4 class="section-subheader">
						<a href="./news-template.php">On Call Attorney - Sunday, May 7, 2017</a>
					</h4>
					<p class="section-subtitle post-date">Date: May 4, 2017</p>
					<p class="section-subtitle post-location">Location: 8201 Peters Road Plantation, FL 33324</p>
				</article>

				<article class="section-post event-post">
					<h4 class="section-subheader">
						<a href="./news-template.php">On Call Attorney - Sunday, May 7, 2017</a>
					</h4>
					<p class="section-subtitle post-date">Date: May 4, 2017</p>
					<p class="section-subtitle post-location">Location: 8201 Peters Road Plantation, FL 33324</p>
				</article>

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