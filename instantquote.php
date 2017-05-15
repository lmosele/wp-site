<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="instantQuote" class="section section-blue row">
		<div class="large-8 large-centered columns centered">
			<h1 class="section-headline">Settlement Fee InstantQuote®</h1>
			<h2 class="section-subheader">Once we quote it we honor it!</h2>
			<p class="section-paragraph">
				No more playing around with calculators or trying to figure out rates - let us do the work!
			</p>
			<ul class="reset-list">
				<li>Rate calculators are often inaccurate and too high- user hits the wrong key- unique circumstances not factored into quote; this causes lenders to have to refund to borrowers.</li>
				<li>We have a better service. We offer a guaranteed rate - once we quote it we stick by it. Guaranteed quote within 15 minutes of request. Receive an accurate written quote for exactly what the transaction requires. No guessing as to which button to push or which option to choose on a rate calculator. We accurately calculate the closing fee, recording costs, transfer tax and title insurance and give it to you in writing.</li>
				<li>Why suffer through having new HUD's re-signed and issuing refunds - get it right the first time with Kriss Law/Atlantic Settlement Fee InstantQuote®.</li>
			</ul>
			<p class="section-subtitle">For more information about our services, contact attorneys Scott Kriss or Mike Krone at 888-632-4939 or email at scott@krisslawatlantic.com or mike@krisslawatlantic.com</p>
			<div class="button-row">
					<a class="orange-button" href="mailto:instantquote@krisslawatlantic.com">Email Us at InstantQuote®</a>
					<span>or</span>
					<a class="ghost-button white" href="./contact-us.php">Contact Us</a>
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