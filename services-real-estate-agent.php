<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="reaBanner" style="background-image:url('./dist/img/banner-image-rea.jpg');" class="banner rea-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Real Estate Agents</h1>
			<h2 class="banner-subheader">placeholder text</h2>
		</div>
	</section>

	<!-- nav -->
	<section class="section section-white row">
		<div class="large-2 columns">

			<ul class="services-nav">
				<li class="services-nav-item">
					<a href="#">Lenders</a>
				</li>
				<li class="services-nav-item">
					<a class="selected" href="#">Real Estate Agents</a>
				</li>
				<li class="services-nav-item">
					<a href="#">Buyers</a>
				</li>
				<li class="services-nav-item">
					<a href="#">Sellers</a>
				</li>
			</ul>

		</div>

	<!-- content		 -->
		<div class="large-9 large-pull-1 columns">
			<h4 class="section-subheader">Kriss Law and Atlantic Closing & Escrow, LLC work with many of the top national and local real estate brokerages.</h4>
			<p class="section-paragraph">
				 Our service to these brokers parallels that of our mortgage lenders. Many real estate brokers in the areas in which we cover choose to refer their <a href="./services-buyer.php">Buyers</a> and <a href="./services-seller.php">Sellers</a> to us as they have found our accessibility, fees, and general know-how to be unmatched.
				<br/>
				<br/>
				<b>Our closing services to our real estate brokers include:</b>
			</p>

			<ul class="reset-list">
				<li>Free Purchase and Sale Agreement review and revision for your clients when our office represents the lender</li>
				<li>Fair and sometimes negotiable attorney fees for your Buyers and Sellers</li>
				<li>Our closing staff of seasoned real estate attorneys are happy to close in a location that is easiest for you and your clients.</li>
				<li>Many members of our staff are available after normal business hours to answer any questions you or your clients may have</li>
				<li>Our experienced paralegal staff always reviews the HUD with all parties before the closing to ensure a smooth transaction</li>
				<li>Our attorneys have conducted many home financing seminars and are always happy to assist in any such endeavors</li>
				<li>Our philosophy dictates that the best way to do business is to provide referrals. As such, we always keep our best clients in mind when a potential Buyer comes to us first</li>
			</ul>

			<p>
			he bottom line is that a smooth transaction breeds more business for all parties involved. With that in mind, our attorneys and paralegals are the last people your clients deal with in a transaction and we assure a positive experience at that time.
			</p>
			<p>
			If you are a visiting our site and are looking for a great real estate broker to help you buy a new home or sell your existing residence, we would be happy to recommend one of our trusted real estate broker clients to you. Please call and speak to Attorney Kriss.
			</p>
			
			<div class="button-row">
				<a href="#" class="orange-button">Contact Us</a>
				<a href="#" class="blue-button">Get A Quote</a>
				<a href="#" class="blue-button">Fee Calculator</a>
				<a href="#" class="ghost-button blue">Order A Title</a>
			</div>
		</div>
	</section>

	<section id="lenderValueProp" class="section section-blue value-prop row">
		<div class="large-8 large-centered columns center">
			<h3 class="valueprop-header">We serve over 100 agencies across the nation.</h3>
			<img class="valueprop-image" src="./dist/img/buyers-house.svg">

			<div class="valueprop-link"><a href="#" class="ghost-button white">Contact Us Today</a></div>
		</div>
	</section>


	<?php echo file_get_contents("./src/modules/_footer.php"); ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>