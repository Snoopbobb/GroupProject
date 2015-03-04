<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('resources/assets/instafeed.min.js') }}"></script>
	<script src="{{ URL::asset('resources/assets/main.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>
<body>
	<div class="hero">
		<div class="photo">
			<header>
				<nav>
					<span class="logo">
						<a href="/">Logo</a>
					</span>
					<div>
						<div class="options">
							<div>headertext</div>
							<div>other txt</div>
						</div>
						<div class="options">
							<div>2headertext2</div>
							<div>2other txt2</div>
						</div>
						<div class="options">
							<div>3headertext3</div>
							<div>3other txt3</div>
						</div>
					</div>
					<span class="user-options">
						small logo 
						small logo 
					</span>
				</nav>
			</header>
		</div>
		@section('featured')
		@endsection
	</div>
	
	<main>
		<div class="tagline">

		@section('tagline')
		@show

		</div>
		<div class="browse-section">
			
		@yield('main_content')

		</div>

	</main>

	<footer>
		<span class="logo-footer">
			logo
		</span>
		<span class="about">
			<a href="/">About Us</a>
			<a href="/">FAQ</a>
		</span>
		<span class="social-logos">
			<span>
				logo
			</span>
			<span>
				logo
			</span>
		</span>
	</footer>

</body>
</html>