<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/all.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/dashboard.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/blog-style.css') }}" />
	<title>Laravel Hello</title>
</head>
<body>
	@include('layouts.header')
	
	<main>
		<div class="carousel slide" id="myCarousel" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button class="active" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" aria-current="true"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
						<rect width="100%" height="100%" fill="#A52A2A"></rect>
					</svg>
					<div class="container">
						<div class="carousel-caption text-start">
							<h1>Example headline.</h1>
							<p>Some representative placeholder content for the first slide of the carousel.</p>
							<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
						<rect width="100%" height="100%" fill="#8A2BE2"></rect>
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Some representative placeholder content for the second slide of the carousel.</p>
							<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FF1493"></rect></svg>
					<div class="container">
						<div class="carousel-caption text-end">
							<h1>One more for good measure.</h1>
							<p>Some representative placeholder content for the third slide of this carousel.</p>
							<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-9">
					<div class="leftContent">
						@yield('content')
					</div>
				</div>
				<div class="col-3 bg-success">
					<div class="rightContent">
						<div class="userProfile my-3">
							<div class="card" style="width: 100%;">
								<div class="card-body">
									<h5 class="card-title">User Profile</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a class="btn btn-primary" href="#">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="userProfile my-3">
							<div class="card" style="width: 100%;">
								<div class="card-body">
									<h5 class="card-title">User Profile</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a class="btn btn-primary" href="#">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="userProfile my-3">
							<div class="card" style="width: 100%;">
								<div class="card-body">
									<h5 class="card-title">User Profile</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a class="btn btn-primary" href="#">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</main>
	
	@include('layouts.footer')
	<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ URL::asset('/js/blog-style.js') }}"></script>
</body>
</html>