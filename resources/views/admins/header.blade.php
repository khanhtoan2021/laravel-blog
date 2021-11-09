<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admins/home">My Administrator</a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
	<div class="d-flex">
		<a class="btn btn-primary px-3 me-3" href="/admins/register">Sign up</a>
		@if ($sessionUser)
			<a class="btn btn-secondary px-3 me-3" href="/admins/logout">Logout</a>
		@else
			<a class="btn btn-secondary px-3 me-3" href="/admins/login">Sign in</a>
		@endif
	</div>
</header>