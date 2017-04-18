<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="titleBanner" style="background-image:url('./dist/img/banner-image-contactus.jpg');" class="banner contactUs-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Contact Us</h1>
			<h2 class="banner-subheader">We strive to make your closing process quick and painless, reach out to us via any of the ways below and we’ll be glad to help.</h2>
		</div>
	</section>

	<section id="contactUsSEction" class="section section-white">
		<div class="row">

			<!-- main content -->
			<div class="large-7 medium-12 columns">
				<h3 class="section-subheader">Contact Us</h3>
				<p>Fill out the form below completely and we’ll contact you as soon as possible. </p>
				<hr />

					<form id="contactUsForm">
						<div class="form-section blue">
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Full Name
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Email
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Phone Number
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Additional Questions or Concerns
						        <textarea></textarea>
						      </label>
						    </div>
						  </div>
						 
						</div>

					</form>

				<hr />

				<div class="row">
			    <div class="large-8 medium-12 columns">
			     	<p>For your safety, please do not send any sensitive or confidential information via the email form.</p>
			    </div>
			    <div class="large-4 medium-12 columns">
			     	<button class="orange-button right">Send</button>
			    </div>
			  </div>

			</div>

			<!-- sidebar -->
			<div class="large-5 show-for-large-up columns separator-left">
				<h3 class="section-subheader">Directions</h3>
				<p class="section-subtitle">We offer our services nationally, click below for directions to our offices:</p>
				<?php echo file_get_contents("./src/modules/_addresses-list.php"); ?>
				
				<hr />

				<h4 class="section-subheader">Reach One of Our Members</h4>
				<p class="section-subtitle">Have a specific need? Reach any of out team members via the team page</p>
				<a class="ghost-button blue" href="#team-page">Team Page</a>

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