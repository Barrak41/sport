<?php 
session_start();
if(!isset($_SESSION['backendLogin'])){
    header("location: ./login/");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Dashboard</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
		<li class="nav-item active">
	        <a class="nav-link" href="#">Dashboard</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Mijn Club</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Sport Eigenschappen</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Sporten</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Regios</a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="#">clubs</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="">
		<div class="">
			<div class="">
				<div class="">
					<div class=""></div>
					<div class="">
						<ul class="">
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">Dashboard</div>
					<div class="card-body">
						<p>Welcome to the dashboard!</p>
						<p>You can manage your users and settings here.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
