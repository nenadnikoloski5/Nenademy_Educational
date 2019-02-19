	
    
    
    @include('partials.header')


    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<section class="top-letest-product-section">
<div class="container">
<div class="row">
<div class="col-12">

<div class="section-heading text-center">
<h2>Pick one and get started!</h2>
<div class="line-shape"></div>
</div>
</div>
</div>
<div class="row"> 

<div class="col-12 col-md-4">
<a href="{{route('/math')}}">
<div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="single-icon">
<i class="fab fa-nutritionix"></i>
</div>
<h4 class="specialHeaderOption">Math</h4>
<p>Get started with Math</p>
</div>
</div>
</a>

<div class="col-12 col-md-4">
    <a href="{{route('/programming')}}">
<div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="single-icon">
<i class="fas fa-laptop-code"></i>
</div>
<h4 class="specialHeaderOption">Programming</h4>
<p>Get started with Programming</p>
</div>
</div>
</a>


</div>	</section>