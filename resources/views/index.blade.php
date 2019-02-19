<!DOCTYPE html>
<html >
<head>
	<title>Nenademy</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('assets/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



</head>
<body>

	
	

	
	@include('partials.header')


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{asset('assets/img/bg.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<h2>math & programming</h2>
							<p>Have you ever wanted to learn math or programming(or both)? You have come to the right place! At Nenademy  you will do that, for Free!</p>

							@guest
							<a href="#" class="site-btn sb-line">GET STARTED</a>
							<a href="#" class="site-btn sb-white">LOGIN</a>
							@endguest
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	
	</section>



	


	<section class="top-letest-product-section">
<div class="container">
<div class="row">
<div class="col-12">

<div class="section-heading text-center">
<h2>Why Is It Special?</h2>
<div class="line-shape"></div>
</div>
</div>
</div>
<div class="row"> 

<div class="col-12 col-md-4">
<div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="single-icon">
<i class="far fa-lightbulb"></i>
</div>
<h4 class="specialHeaderOption">Easy to use</h4>
<p>I built this site for beginners, as I once was, to help them accomplish their dream</p>
</div>
</div>

<div class="col-12 col-md-4">
<div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="single-icon">
<i class="fas fa-graduation-cap"></i>
</div>
<h4 class="specialHeaderOption">Achieve Greatness</h4>
<p>This site won't take you from 0 to a Job, but it's a start</p>
</div>
</div>

<div class="col-12 col-md-4">
<div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="single-icon">
<i class="fas fa-dollar-sign"></i>
</div>
<h4 class="specialHeaderOption">It Is Free</h4>
<p data-select-like-a-boss="1">Yup, this entire site is free, I wanted to give back to the community :) </p>
</div>
</div>
</div>
</div>	</section>



	



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
