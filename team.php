<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="teamBanner" style="background-image:url('./dist/img/banner-image-team.jpg');" class="banner team-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Our Team</h1>
			<h2 class="banner-subheader">The average level of real estate experience for Kriss Law and Atlantic Closing & Escrow, LLC’s  employees is over 10 years. Each member of the staff has only one credo in the performance of their daily duties — customer satisfaction!</h2>
		</div>
	</section>

	<section id="careers" class="section section-white">
		<div class="row">

			<!-- main content -->
			<div class="large-8 medium-12 columns">
				<h3 class="section-subheader">Executives</h3>

				<article class="section-bio row">
					<div class="large-2 columns">
						<img class="bio-image" src="./dist/img/team/scott-kriss.jpg">
					</div>

					<div class="large-10 columns">
						<h4 class="bio-name">Scott D. Kriss Esq.</h4>
						<span class="bio-title">Founder & President</span>
						<span class="bio-subtitle">Phone: 000-000-0000</span>
						<span class="bio-subtitle">Fax: 000-000-0000</span>
						<span class="bio-subtitle">Email: <a href="mailto:testemail@test.com">testemail@test.com</a></span>

						<p class="bio-paragraph">
							Attorney Kriss was born and raised in Rhode Island‚ conducted his undergraduate studies in Maine‚ and earned his law degree in Connecticut. The son of two small business owners‚ Attorney Kriss brings that same hardworking dedication to his practice. He has brought Kriss Law and Atlantic Closing & Escrow from a small practice to one of the most recognized real estate firms on the East Coast operating under the credo that “no call ever goes unreturned‚” Attorney Kriss has also served as a contributor to Mortgage Originator Magazine.
						</p>
					</div>
				</article>

				<h3 class="section-subheader">Senior Attorneys</h3>

				<article class="section-bio row">
					<div class="large-2 columns">
						<img class="bio-image" src="./dist/img/team/ben-hollander.jpg">
					</div>

					<div class="large-10 columns">
						<h4 class="bio-name">Ben Hollander, Esq.</h4>
						<span class="bio-title">Senior Connecticut Counsel</span>
						<span class="bio-subtitle">Phone: 000-000-0000</span>
						<span class="bio-subtitle">Fax: 000-000-0000</span>
						<span class="bio-subtitle">Email: <a href="mailto:testemail@test.com">testemail@test.com</a></span>

						<p class="bio-paragraph">
							Attorney Hollander is a graduate of George Washington University and Quinnipiac University School of Law.  He has been in private practice since 1999 in Connecticut specializing in transactional matters including representation of buyers, sellers, and lenders. Attorney Hollander's practice has also included his appointment as a Special Public Defender.
						</p>
					</div>
				</article>

				<article class="section-bio row">
					<div class="large-2 columns">
						<img class="bio-image" src="">
					</div>

					<div class="large-10 columns">
						<h4 class="bio-name">Default Employee</h4>
						<span class="bio-title">Test Title</span>
						<span class="bio-subtitle">Phone: 000-000-0000</span>
						<span class="bio-subtitle">Fax: 000-000-0000</span>
						<span class="bio-subtitle">Email: <a href="mailto:testemail@test.com">testemail@test.com</a></span>

						<p class="bio-paragraph">
							This is what an employee without a profile photo will look like
						</p>
					</div>
				</article>

			</div>

			<!-- sidebar -->
			<div class="large-4 show-for-large-only columns separator-left">

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