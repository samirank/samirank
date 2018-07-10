<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Samiran Kakoty</title>
	<!-- <link rel="stylesheet" href="https://unpkg.com/wingcss"/> -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link rel="stylesheet" href="vendor/logoins/css/index.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
			<a class="navbar-brand" href="#">Samiran kakoty</a>
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class='fas fa-bars'></span>
			</button> -->
			<button class='btn navbar-toggler navbar-btn btn-link pull-right' data-target='#modalNavigation' data-toggle='modal' type='button'>
				<span class='sr-only'>Open navigation</span>
				<span class='fas fa-bars'></span>
			</button>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hire</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</nav>	
	<div class='modal fade modal-fullscreen-menu' id='modalNavigation' role='dialog' tabindex='-1'>
		<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
			<span class='sr-only'>Close navigation</span>
			<span class='fas fa-times'></span>
		</button>
		<div class='modal-dialog'>
			<nav class='list-group'>
				<a class='list-group-item' href='#'>Home</a>
				<a class='list-group-item' href='#'>Services</a>
				<a class='list-group-item' href='#'>Meet the Team</a>
				<a class='list-group-item' href='#'>Careers</a>
				<a class='list-group-item' href='#'>Contact Us</a>
			</nav>
		</div>
	</div>

	<!-- End of navigation -->
	<div class="row p-5">
		<div class="col col-12 col-md-6 p-2">
			<img class="img img-fluid rounded" src="profile.jpg" alt="profile.jpg">
		</div>
		<div class="col col-12 col-md-6 p-2">
			<h2>Hi, I am Samiran</h2>
			Bootstrap’s responsive styles are built to be responsive, an approach that’s often referred to as mobile-first. We use this term in our docs and largely agree with it, but at times it can be too broad. While not every component must be entirely responsive in Bootstrap, this responsive approach is about reducing CSS overrides by pushing you to add styles as the viewport becomes larger.
		</div>
	</div>
</div>

	<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>