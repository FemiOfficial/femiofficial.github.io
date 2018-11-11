<!DOCTYPE html>
<html lang="en">
<head>
<title>BRYTHUB | Freelance web and mobile development ::</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Website design, mobile app development, hybrid app development, android, native apps, bootcamp, web training" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
 <script type="text/javascript">
		  	$(document).ready(function(){
		  		$('#about').on('click', function(){
				$('html,body').animate({
			        scrollTop: $(".about").offset().top},
			        'slow');
				});
				$('#services').on('click', function(){
					$('html, body').animate({
						scrollTop:$(".services").offset().top}, 
						'slow');
					});
				$('#contact').on('click', function(){
					$('html, body').animate({
						scrollTop:$(".contact").offset().top}, 
						'slow');
					});
				$('.btn-1b').on('click', function(){
					$('html, body').animate({
						scrollTop:$(".about").offset().top}, 
						'slow');
					});
		  	});
 </script>

</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="w3layouts-logo">
						<h1><a href="index.php" style="text-transform: none;">BrytHub<span>INC</span></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a id = "about" class="hvr-sweep-to-bottom">About</a></li>
							<li><a id= "services" class="hvr-sweep-to-bottom">Services</a></li>
							<!-- <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-sweep-to-bottom" href="icons.php">Icons</a></li>
									<li><a class="hvr-sweep-to-bottom" href="typography.php">Typography</a></li>          
								</ul>
							</li> -->
							<li><a id = "contact" class="hvr-sweep-to-bottom">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //header -->
