<!DOCTYPE html>
<html>
<head>
	<title>The Root</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-target="#mainNavBar" data-offset="300">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs" href="index.php">theRoot</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="mainNavBar">
					<ul class="nav navbar-nav">
						<li><a href="#about">About</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</div>
	</nav>

	<div class="stickyFooter navbar navbar-default visible-lg visible-md visible-sm navbar-fixed-bottom">
		<div class="navbar-inner">
			<ul class="nav navbar-nav">
				<li><a href="">The Root</a></li>
			</ul>
		</div>
	</div>
<!-- Front Page -->
	<section>
		<div id="frontPage">
			<div class="container text-center">
				<object id="logoSVG">		
					<embed src="img/logo-v2.svg">
				</object>
			</div>
		</div>
	</section>
<!-- About section -->
	<section id="about">
		<div class="container">
			<h2>About myself.</h2>
			
		</div>
	</section>
<!-- Portfolio section -->
	<!-- <section id="portfolio">
		<div class="container portfolio">
		</div>
	</section> -->
<!-- Contact section -->
	<!-- <section id="contact">
		<div class="container contact">
		</div>
	</section> -->



	<!-- <script type="text/javascript" src="skrollr.min.js"></script> -->
	<script>
		// var s = skrollr.init();

		$('#portfolio').on('activate.bs.scrollspy', function () {
			$("#portfolio").css({backgroundColor: 'red'});
			console.log("works");
		});
	</script>
</body>
</html>