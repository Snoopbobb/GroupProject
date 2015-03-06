<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HikingTrailz</title>
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('javascript/instafeed.min.js') }}"></script>
	<script src="{{ URL::asset('javascript/main.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
	<div class="hero">
		<div class="photo" style="background-image: url(<?php if(isset($imageURL)){echo $imageURL;}{echo '/css/images/Sup2HDR.jpg';} ?>)">
			<header>
				<nav>
					<span class="logo">
						<a href="/">Logo</a>
					</span>
					<div>
						<div class="options browse">
							<div>Browse All</div>
							<div>See All The Mountains</div>
						</div>
						<div class="options suggest">
							<div>Suggest A Trail</div>
							<div>Send Us What You Wanna See</div>
						</div>
						<div class="options ">
							<div>3headertext3</div>
							<div><a href="{{ url('/auth/logout') }}">3other txt3</a></div>
						</div>
					</div>
					<span class="user-options">
						<a href="/auth/register" title="Signup"><i class="fa fa-pencil-square-o"></i></a>
						<a href="/auth/login" title="Login"><i class="fa fa-sign-in"></i></a>
						<a href="/profile" title="Edit Profile"><i class="fa fa-cogs"> </i></a>
					</span>
				</nav>
			</header>
			<div class="title">
				@section('title')
				@show
			</div>
		</div>

	</div>
	<div class="blah">
		@section('featured')
		@show
	</div>
	<main>

		@section('tagline')
		@show
		<div class="browse-section">
			
		@yield('main_content')

		</div>

	</main>

	<footer>
		<span class="logo-footer">
			<a href="/">logo</a>
		</span>
		<span class="about">
			<a href="/">About Us</a>
			<a href="/">FAQ</a>
		</span>
		<span class="social-logos">
			<i class="fa fa-instagram fa-3x"></i>
			<i class="fa fa-facebook-official fa-3x"></i>
			<i class="fa fa-twitter fa-3x"></i>
		</span>
	</footer>

</body>
</html>