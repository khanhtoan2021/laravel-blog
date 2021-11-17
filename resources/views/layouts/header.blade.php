<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{route('homePage')}}">Blog Channel</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" id="dropdownMenu2" type="button" data-bs-toggle="dropdown" aria-expanded="false">Blogs</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<li><a class="dropdown-item" href="/posts/listAll">All View</a></li>
								<li><a class="dropdown-item" href="/posts/addPost">Add a Blog</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
				<div class="d-flex flex-row-reverse mx-2">
					@if ($sessionUser)
					<a class="btn btn-light" id="logout" href="/users/logout"><i class="fas fa-sign-out-alt me-2"></i><span>Logout</span></a>
					@else
					<a class="btn btn-light" id="login" href="/users/login"><i class="fas fa-sign-out-alt me-2"></i><span>Login</span></a>
					@endif
					<a class="btn btn-success me-3" id="signup" href="/users/register"><i class="fas fa-plus-circle me-2"></i><span>Sign Up</span></a>
				</div>
			</div>
		</div>
	</nav>
</header>