<style>
.row {
	width: 125%;
}
 </style>


 	<link href="{{asset('assets/img/favicon.ico')}}" rel="shortcut icon"/>


<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{ route('/')}}" class="site-logo">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">

                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="user-panel">

                        @auth
                        

                        <div class="up-item extra-spc">
                            <i class="flaticon-profile"></i>
                            <a href="{{route('/leaderboard')}}">Leaderboard</a>
                        </div>

                        @else

                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="login">Sign In </a> or <a href="register">Create Account</a>
                        </div>

                        @endauth





                       

                        <div class="up-item extra-spc">
                            <i class="flaticon-profile"></i>
                            <a href="{{route("/contact")}}">Contact</a>
                        </div>

                        @auth
                        <div class="up-item extra-spc">
                            <i class="flaticon-profile"></i>
                            <a href="settings">Settings</a>
                        </div>

						<div class="up-item extra-spc">
                            <i class="flaticon-profile"></i>
                            <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a>
                        </div>



                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>

                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="{{route('/')}}">Home</a></li>
                
                <li><a href=" {{route('/programming')}} ">Programming</a></li>
				<li><a href="{{route('/math')}}">Math</a></li>
               
            </ul>
        </div>
    </nav>
</header>
