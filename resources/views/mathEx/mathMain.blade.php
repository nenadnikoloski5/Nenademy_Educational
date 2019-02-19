@if (   $mathPoints < $pointsNeeded   )
<script> location.replace('{{route("/notEnoughPoints")}}') </script>
@endif
    
    
    
    @include('partials.header')

	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" href="../css/slicknav.min.css" />
	<link rel="stylesheet" href="../css/jquery-ui.min.css" />
	<link rel="stylesheet" href="../css/owl.carousel.min.css" />
	<link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/style.css" />
    

    <style>
    iframe {
        width: 100%;
        height: 80%;
    }
    </style>


	<iframe src="display/iframe/{{$courseNum}}" frameborder="0"></iframe>

