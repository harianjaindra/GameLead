<!DOCTYPE html>
<html lang="en">
<head>
<title>GameLead</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fantasy World Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
 
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- header -->
<div class="header">
		<div class="w3layouts_header_left">
				<div class="top-nav-text">
						<p>Call Us : <span class="call">+21 8578 8867 889</span></p>
						<p>Email Us : <span class="mail"><a href="mailto:info@example.com">gamelead.id@gmail.com</a></span></p>
					</div>
		</div>
		<div class="w3layouts_header_right">
			     <form action="#" method="post">
						<input name="Search heare" type="search" placeholder="Search" required="">
					
						<input type="submit" value="">
					</form>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="/"><span>GameLead</span></a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-5" id="cl-effect-5">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/"><span data-hover="Home">Home</span></a></li>

							<li><a href="/about" class="nav-link"><span data-hover="Learn">Learn</span></a></li>
							<li><a href="{{url('/services')}}" class="nav-link"><span data-hover="Tournament">Tournament</span></a></li>
							<li><a href="/findTeam" class="nav-link"><span data-hover="FindTeam">FindTeam</span></a></li>
							@guest
							<li><a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a></li>
							@else
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    Hello, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //header -->