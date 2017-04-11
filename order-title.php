<?php echo file_get_contents("./src/modules/_head.php") ?>
<body id="home">

	<?php echo file_get_contents("./src/modules/_menu.php"); ?>

	<section id="titleBanner" style="background-image:url('./dist/img/banner-image-title.jpg');" class="banner title-banner row fullwidth">
		<div class="banner-container large-8 columns">
			<h1 class="banner-header">Order A Title</h1>
			<h2 class="banner-subheader">The title ordering process can often be confusing and costly, but at Kriss law we’ve made things simple. Just fill out the form and we’ll reach out to you with everything you need.</h2>
		</div>
	</section>

	<section id="titleForm" class="section section-white">
		<div class="row">
			<div class="large-8 medium-12 columns">
				<h3 class="section-subheader">Order Your Title in Four Easy Steps</h3>
				<hr />

					<form id="orderTitle">
						<div id="propertyInfoForm" class="form-section blue">
							<p class="section-subtitle">1. Stuff goes here</p>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Property Address
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-6 columns">
						      <label>City
						        <input type="text" />
						      </label>
						    </div>
						    <div class="large-6 columns">
						      <label>State
						        <select>
						          <option value="MA">Massachusetts</option>
						          <!-- not sure how you want this filled out -->
						        </select>
						      </label>
						    </div>
						  </div>
						  <div class="row">
						    <div class="large-6 columns">
						      <label>Zip Code
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						</div>

						<div id="generalInfoForm" class="form-section">
							<p class="section-subtitle">2. Stuff goes here</p>
						  <div class="row">
						    <div class="large-6 columns">
						      <label>Sales Price
						        <input type="text" />
						      </label>
						    </div>
						    <div class="large-6 columns">
						      <label>Refinance Or Purchase
						        <select>
						          <option value="Refinance">Refinance</option>
						          <option value="Purchase">Purchase</option>
						          <option value="Equity">Equity</option>
						        </select>
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-6 columns">
						      <label>Loan Amount
						        <input type="text" />
						      </label>
						    </div>
						    <div class="large-6 columns">
						      <label>Loan Number
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						</div>

						<div id="sellerBorrowerInfo" class="form-section blue">
							<p class="section-subtitle">3. Stuff goes here</p>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Seller Name
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-6 columns">
						      <label>Borrower Name
						        <input type="text" />
						      </label>
						    </div>
						    <div class="large-6 columns">
						      <label>Borrower Phone
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-12 columns">
						      <label>Borrower Email
						        <input type="text" />
						      </label>
						    </div>
						  </div>
						</div>

						<div id="lenderInfo" class="form-section">
							<p class="section-subtitle">4. Stuff goes here</p>
						  <div class="row">
						    <div class="large-12 columns">
						      <label>Company Name
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-12 columns">
						      <label>Contact Name*
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-12 columns">
						      <label>Mailing Address*
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-6 columns">
						      <label>City*
						        <input type="text" />
						      </label>
						    </div>
						     <div class="large-6 columns">
						      <label>State*
						        <select>
						          <option value="MA">Massachusetts</option>
						          <!-- not sure how you want this filled out -->
						        </select>
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-6 columns">
						      <label>Zip Code*
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-6 columns">
						      <label>Lender Phone #*
						        <input type="text" />
						      </label>
						    </div>
						    <div class="large-6 columns">
						      <label>Lender Fax #
						        <input type="text" />
						      </label>
						    </div>
						  </div>

						  <div class="row">
						    <div class="large-12 columns">
						      <label>Lender Email*
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
				<div class="large-12 columns">
					<b>5. Confirm all your information</b>
					<p>Once you're sure everything is correct, click "Request Title"</p>
				</div>
				<hr />
				<button class="orange-button right">Request Title</button>
				

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
  <script type="text/javascript" src="dist/js/slick/slick.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>