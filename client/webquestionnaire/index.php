<?php include("../template/header.php") ?>
<style>
/* label color */
.input-field label {
	color: #ce93d8;
}
/* label focus color */
.input-field input[type=text]:focus + label {
	color: #ce93d8 !important;
}
/* label underline focus color */
.input-field input[type=text]:focus {
	border-bottom: 1px solid #ce93d8 !important;
	box-shadow: 0 1px 0 0 #ce93d8 !important;
}
/* valid color */
.input-field input[type=text].valid {
	border-bottom: 1px solid #ce93d8;
	box-shadow: 0 1px 0 0 #ce93d8;
}
/* invalid color */
.input-field input[type=text].invalid {
	border-bottom: 1px solid #f44336;
	box-shadow: 0 1px 0 0 #f44336;
}
/* label focus color */
.input-field input[type=email]:focus + label {
	color: #ce93d8 !important;
}
/* label underline focus color */
.input-field input[type=email]:focus {
	border-bottom: 1px solid #ce93d8 !important;
	box-shadow: 0 1px 0 0 #ce93d8 !important;
}
/* valid color */
.input-field input[type=email].valid {
	border-bottom: 1px solid #ce93d8;
	box-shadow: 0 1px 0 0 #ce93d8;
}
/* invalid color */
.input-field input[type=email].invalid {
	border-bottom: 1px solid #f44336;
	box-shadow: 0 1px 0 0 #f44336;
}
/* icon prefix focus color */
.input-field .prefix.active {
	color: #ce93d8;
}
span.invalid {
	color: #c62828;
}
</style>
<!-- CONTAINER -->
<div class="container">
	<div class="row">
		<form id="webform" class="col s12" action="">
			<!-- COMPANY DETAILS -->
			<div class="section">
				<div class="card hoverable">
					<div class="section-label purple lighten-3 white-text card z-depth-1" style="border-radius: 5px 5px 0px 0px;">
						<div class="card-content">
							<p>Company details</p>
						</div>
					</div>
					<div class="card-content">

						<!-- Company name -->
						<div class="row">
							<div class="input-field col s12">
								<label for="company_name">Company name</label>
								<input placeholder="Name of your company" id="company_name" name="company_name" type="text">
							</div>
						</div>

						<!-- company_address -->
						<div class="row">
							<div class="input-field col s12">
								<label for="company_address">Address</label>
								<input placeholder="Address of your company" id="company_address" name="company_address" type="text">
							</div>
						</div>

						<!-- postal_code -->
						<div class="row">
							<div class="input-field col s12">
								<label for="postal_code">Postal code</label>
								<input placeholder="ZIP / PIN code" id="postal_code" name="postal_code" type="text">
							</div>
						</div>

						<!-- mobile_no -->
						<div class="row">
							<div class="input-field col s12">
								<label for="mobile_no">Mobile number</label>
								<input placeholder="Your contact number" id="mobile_no" name="mobile_no" type="text">
							</div>
						</div>

						<!-- emailid -->
						<div class="row">
							<div class="input-field col s12">
								<label for="emailid">Email</label>
								<input placeholder="Compay email id" id="emailid" name="emailid" type="email">
							</div>
						</div>

						<!-- What does your company do? -->
						<div class="row">
							<div class="input-field col s12">
								<label for="company_work">What does your company do?</label>
								<textarea class="materialize-textarea" placeholder="Write about your company." id="company_work" name="company_work"></textarea>
								<span class="helper-text"></span>
							</div>
						</div>

					</div>
				</div>
			</div>


			<!-- About Business -->
			<div class="section">
				<div class="card hoverable">
					<div class="section-label purple lighten-3 white-text card z-depth-1" style="border-radius: 5px 5px 0px 0px;">
						<div class="card-content">
							<p>About Business</p>
						</div>
					</div>
					<div class="card-content">

						<!-- Website URl -->
						<div class="row">
							<div class="input-field col s12">
								<label for="company_url">Do you have a URL in mind for your website?</label>
								<input placeholder="Eg: https://wwww.yoursitename.com" id="company_url" name="company_url" type="text">
							</div>
						</div>

						<!-- buy_domain -->

						<!-- postal_code -->
						<div class="row">
							<div class="input-field col s12">
								<label for="postal_code">Postal code</label>
								<input placeholder="ZIP / PIN code" id="postal_code" name="postal_code" type="text">
							</div>
						</div>

						<!-- mobile_no -->
						<div class="row">
							<div class="input-field col s12">
								<label for="mobile_no">Mobile number</label>
								<input placeholder="Your contact number" id="mobile_no" name="mobile_no" type="text">
							</div>
						</div>

						<!-- emailid -->
						<div class="row">
							<div class="input-field col s12">
								<label for="emailid">Email</label>
								<input placeholder="Compay email id" id="emailid" name="emailid" type="email">
							</div>
						</div>

						<!-- What does your company do? -->
						<div class="row">
							<div class="input-field col s12">
								<label for="company_work">What does your company do?</label>
								<textarea class="materialize-textarea" placeholder="Write about your company." id="company_work" name="company_work"></textarea>
								<span class="helper-text"></span>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="center-align">
				<button type="submit" class="btn waves-effect waves-purple waves-circle">
					Submit
				</button>
			</div>
		</form>
	</div>
</div>
<!-- CONTAINER -->

<!-- FOOTER -->
<footer class="page-footer center-align white grey-text" style="position: relative;">
	<small>Made with <span class="red-text"><i class="fas fa-heart"></i></span> by <a class="grey-text" href="https://www.samirankakoty.com">Samiran Kakoty</a></small>
</footer>



<!--JavaScript at end of body for optimized loading-->
<script src="../vendor/jquery/jQuery-3.3.1.min.js"></script>
<script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>

<script>
	$(document).ready(function(){
		$('.sidenav').sidenav();
	});
</script>

<!-- Jquery validator -->
<script>
	$("#webform").validate({
		errorClass: "invalid",
		validClass: "valid",
		errorElement: "span",
		success: "valid",
		rules: {
		    // simple rule, converted to {required:true}
		    "company_name": {
		    	"required": true,
		    	"minlength": 4
		    },
		    "company_address": "required"
		}

	});
</script>
</body>
</html>