<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="homeBanner" class="banner home-banner row fullwidth">
		<div class="banner-container large-6 columns">
			<h1>Your Closing Professionals</h1>
			<h2>Residential real estate closing and escrow services made simple and affordable.</h2>
			<a class="blue-button" id="mainBannerButton" href="#">Get A Quote</a>
			<a class="ghost-button blue" id="secondaryBannerButton" href="#">Fee Calculator</a>
		</div>
	</section>

	<section id="homeValueProp" class="section section-white row">
		<div class="large-8 large-centered columns">
			<h3 class="section-headline">Your Closing Professionals</h3>
			<p class="section-paragraph">Text stuff</p>
			<p class="section-subtitle">Text stuff</p>
			<ul class="row">
				<li class="large-3 columns">test</li>
				<li class="large-3 columns">test</li>
				<li class="large-3 columns">test</li>
				<li class="large-3 columns">test</li>
			</ul>
		</div>
	</section>

	<section id="homeTeamIntro" class="section section-blue no-pad row">
		<div class="large-5 columns team-tile-image"></div>
		<div class="large-7 columns">
			<h3 class="section-headline">Your Closing Professionals</h3>
			<p class="section-paragraph">Text stuff</p>
			<div class="button-row row">
				<div class="large-4 columns">
					<a class="ghost-button white fullwidth" href="#">Contact</a>
				</div>
				<div class="large-4 columns">
					<a class="ghost-button white fullwidth" href="#">Contact</a>
				</div>
				<div class="large-4 columns">
					<a class="ghost-button white fullwidth" href="#">Contact</a>
				</div>
			</div>
		</div>
	</section>

	<section id="homeAwards" class="section section-white row">
		<div class="large-8 large-centered columns">
			<h3 class="section-headline">Your Closing Professionals</h3>
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

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="dist/js/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
			$('.home-slider').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  autoplay: true,
			  autoplaySpeed: 5000,
			});
    });
  </script>
	<!-- <script type="text/javascript" src="dist/js/main.min.js"></script> -->
	
</body>
</html>