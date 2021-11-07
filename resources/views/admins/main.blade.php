<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/all.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/dashboard.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}" />
	<title>Laravel Hello</title>
</head>
<body>
	@include('admins.header')
	<div class="container-fluid">
	  <div class="row">
	    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	      <div class="position-sticky pt-3">
	        <ul class="nav flex-column">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="/admins">
	              <span data-feather="home"></span>
	              List All User
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="/news/index">
	              <span data-feather="file"></span>
	              Orders
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="/news/getproduct">
	              <span data-feather="shopping-cart"></span>
	              Products
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="users"></span>
	              Customers
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="bar-chart-2"></span>
	              Reports
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="layers"></span>
	              Integrations
	            </a>
	          </li>
	        </ul>

	        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
	          <span>Saved reports</span>
	          <a class="link-secondary" href="#" aria-label="Add a new report">
	            <span data-feather="plus-circle"></span>
	          </a>
	        </h6>
	        <ul class="nav flex-column mb-2">
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="file-text"></span>
	              Current month
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="file-text"></span>
	              Last quarter
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="file-text"></span>
	              Social engagement
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">
	              <span data-feather="file-text"></span>
	              Year-end sale
	            </a>
	          </li>
	        </ul>
	      </div>
	    </nav>

	    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h2">Dashboard</h1>
	        <div class="btn-toolbar mb-2 mb-md-0">
	          <div class="btn-group me-2">
	            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
	            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
	          </div>
	          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
	            <span data-feather="calendar"></span>
	            This week
	          </button>
	        </div>
	      </div>
	      <div class="mainContent">
					@yield('content')
	      </div>
	    </main>
	  </div>
	</div>

	
	@include('admins.footer')
	<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ URL::asset('/js/style.js') }}"></script>
</body>
</html>