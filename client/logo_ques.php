<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logo design questionnaire</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/mdb/css/mdb.css">
	<link rel="stylesheet" href="vendor/mdb/css/style.css">
	<link rel="stylesheet" href="vendor/logoins/css/style.css">
</head>



<body>
	<!--Navigation-->
	<div>
		<nav class="navbar default-color">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand waves-effect waves-light" href="https://www.samirankakoty.com">Samiran Kakoty</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="waves-effect waves-light">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="index.php" class="waves-effect waves-light">Questionnaire</a></li>
						<li><a href="questionnaire.php" class="waves-effect waves-light">Login</a></li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li> -->
					</ul>
                    <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group waves-effect waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form> -->
                </div>
            </div>
        </nav>
    </div>
    <!--/.Navigation-->



    <div>
    	<div class="col text-center">
    		<h3>Logo design questionnaire</h3>
	    <!-- <p class="author">
	    	<small class="text-muted">© Samiran Kakoty 2018</small>
	    </p> -->
	    <h6 class="text-muted">Please answer the questions below.</h6>
	    <hr class="my-4">
	    <br>
	</div>

	<div class="container">


		<form action="action/submit.php" method="POST">


			<div class="form-group required">
				<label class="col-form-label" for="nameofclient">Your full name</label>
				<input type="text" class="form-control" id="nameofclient" data-validation="required" data-validation-error-msg="Please Enter your full name">
			</div>


			<div class="form-group required">
				<label for="company_description">Company name, background & short description of services.</label>
				<textarea class="form-control" name="company_description" id="company_description" cols="20" rows="5" data-validation="required" data-validation-error-msg="Please write a short description about your company."></textarea>
			</div>


			<div class="form-group required">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" data-validation="email" name="email">
			</div>

			<div class="form-group required">
				<label>Contact number</label>
				<input type="text" class="form-control" data-validation="number" name="contactno">
			</div>

			<div class="form-group required">
				<label>Country</label>
				<input type="text" class="form-control" name="country" id="country" data-validation="country">
			</div>

			<div class="form-group">
				<div class="required">
					<label>Project type</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" value="new design" name="project_type" data-validation="required">
					<label class="form-check-label">
						New design
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" value="re-design" name="project_type">
					<label class="form-check-label">
						Re-design
					</label>
				</div>
			</div>


			<div class="form-group required">
				<label>Design deadline</label>
				<input type="date" class="form-control" data-validation="date" name="deadline">
			</div>


			<div class="form-group">
				<div class="required">
					<label>Is your deadline fixed or flexible?</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="deadline_type" value="fixed" data-validation="required">
					<label class="form-check-label">
						Fixed
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="deadline_type" value="flexible">
					<label class="form-check-label">
						Flexible
					</label>
				</div>
			</div>


			<div class="form-group">
				<label>Current web address (if available)</label>
				<input type="text" class="form-control" data-validation="url" data-validation-optional="true" placeholder="eg: https://www.yoursite.com">
			</div>


			<div class="form-group">
				<label>In what way do you differ from your competition?</label>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Product" name="comp_diff[]">
					<label class="form-check-label">
						Product
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="expertise" name="comp_diff[]">
					<label class="form-check-label">
						Expertise
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="years_in_business" name="comp_diff[]">
					<label class="form-check-label">
						Years in business
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="location" name="comp_diff[]">
					<label class="form-check-label">
						Location
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="customer_service" name="comp_diff[]">
					<label class="form-check-label">
						Customer service
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input other-option" type="checkbox" value="other" name="comp_diff[]">
					<label class="form-check-label">
						Other
					</label>
				</div>
				<input type="text" class="form-control" id="other-text" placeholder="please describe" name="other-text" data-validation="required" data-validation-optional="true">
			</div>


			<div class="form-group">
				<label>Please write the exact name as you would like to appear in your logo.</label>
				<input type="text" class="form-control" data-validation="required">
			</div>


			<div class="form-group">
				<label>What is your tagline if applicable. Do you want this in the logo?</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>Do you have specific images or icons that you wish or do not wish to be in your logo?</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>Do you have any colour preferences or any existing colours you want in your logo?</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>What attributes of your business would you like your logo to reflect?</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>


			<div class="form-group">
				<label>What is the overall message you want to convey to your target audience?</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>


			<div class="form-group">
				<label>Where will your new logo be used?</label>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="">
					<label class="form-check-label">
						Print
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="">
					<label class="form-check-label">
						Website
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="other">
					<label class="form-check-label">
						Other (please describe)
					</label>
				</div>
				<input type="date" class="form-control">
			</div>


			<div class="form-group">
				<label>Who are your main competitors? Please list their websites if possible.</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>

			<div class="form-group">
				<label>What are your thoughts about their logos?  How do you want your logo to differ from their logos?</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>


			<div class="form-group">
				<label>Do any existing logos appeal to you & why? If so, please provide a link to a picture of each logo.</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>

			<div class="form-group">
				<label>Your project budget (for the logo)</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>Will you be requiring corporate stationery or other design services?</label>
				<input type="text" class="form-control">
			</div>

			<div class="form-group">
				<label>Would you like these services to be included in the quote as a package?</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>Your project budget (for the package as you outlined above if applicable)</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>Who is your target market?  Be very specific.</label>
				<input type="text" class="form-control">
			</div>


			<div class="form-group">
				<label>If your customer came away with just two thoughts about your business what would you want them to be?</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>


			<div class="form-group">
				<label>What is the most important application for your logo? (ie. Business Card, Website, Signage, Tshirt, etc)</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>


			<div class="form-group">
				<label>Please supply a brief description of the design you have in mind and any other information that would be useful.</label>
				<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" class="form-control btn btn-default" value="submit" name="logo_ques">
			</div>



		</form>


	</div>





</div>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="vendor/mdb/js/popper.min.js"></script>
<script src="vendor/mdb/js/mdb.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script type="text/javascript"> 
	$.validate({
		modules : 'location, date, security, file',
		onModulesLoaded : function() {
			$('#country').suggestCountry();
		}
	});

	$(".other-option").change(function () {
    //check if the selected option is others
    if (this.value === "other") {
        //toggle textbox visibility
        $("#other-text").toggle();
    }
});
</script>
</html>