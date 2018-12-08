<?php
	include 'login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!--font-awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<style type="text/css">
		.navbar-nav .nav-item {
			margin-left: 20px;
		}
		.custom-checkbox {
			margin-left: 50px;
		}
		.btn-block {
			margin-left: 20px;
		}
		nav, #jumbotron, .dropdown-menu, .modal-header, .btn-block, .card-header, #dashboard, #js-board {
			background-color: #3399CC;
		}
		#jumbotron {
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
		}
		nav {
			border-bottom: solid 1px;
			border-color: #333333;
		}
		.badge {
			background-color: #333333;
			color: white;
		}
		#js-board {
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}
	</style>
</head>
<body style="background-color: whitesmoke;">

	<section>
		<nav class="navbar navbar-expand-sm fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<h2 class="font-weight-bold text-light">JS</h2>
				</a>
				<span class="navbar-toggler" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars text-light" id="menu"></i>
						<i class="fas fa-times text-light" id="times" style="display: none;"></i>
					</span>
				</span>
				<div class="collapse navbar-collapse" id="navbarColor03">
					<ul class="navbar-nav mr-auto">
				      	<li class="nav-item active">
				        	<a class="nav-link text-light" href="#">
				        		Home <span class="sr-only">(current)</span>
				        	</a>
				      	</li>
					  	<li class="nav-item">
				        	<a class="nav-link text-light" href="#">About Us</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link text-light" href="#">Contact Us</a>
				      	</li>
				      	<li class="nav-item">
				      	  	<a class="nav-link text-light" href="#">Policy</a>
				     	</li>
				     	<li class="nav-item">
				      	  	<a class="nav-link text-light" href="#">Partnership</a>
					  	</li>
				     	<li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle text-light font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
						        Services
						    </a>
							<div class="dropdown-menu">
						        <a class="dropdown-item" href="#">category 1</a>
						        <a class="dropdown-item" href="#">category 2</a>
						        <a class="dropdown-item" href="#">category 3</a>
						    </div>
						</li>	
				    </ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron" id="jumbotron">
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<div class="text-center">
					<h1>Journal System</h1>
					<p class="des lead">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<button type="button" class="btn btn-outline-dark">Learn more >></button>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-6">
				<a href="reg.php" class="btn btn-outline-dark float-left">Register</a>
			</div>
			<div class="col-sm-6">
				<button class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#myModal">
					Login
				</button>
			</div>
		</div>
		
		<div class="modal" id="myModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center font-weight-bold text-light">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="login.php" method="post">
							<div class="form-group">
							    <div class="container row">
								    <label class="col-sm-1 my-3">
								       	<i class="fas fa-user"></i>
								    </label>
								    <div class="col-sm-11 my-3">
										<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
									</div>

									<label class="col-sm-1 mb-2">
								       	<i class="fas fa-key"></i>
								    </label>
								    <div class="col-sm-11 mb-2">
										<input type="password" class="form-control" name="password" placeholder="Enter password">
									</div>

									<div class="form-group">
										<div class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">
												<small>Remember password</small>
											</label>
										</div>
									</div>
								    <button name="login" class="btn btn-block">Login</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="close" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>		
	</div>
	</section>

	<section class="mb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-3" id="points">
					<div class="list-group">
						<a href="#" class="list-group-item active font-weight-bold" id="dashboard">
							Journal System
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							Pages <span class="badge badge-pill float-right">40</span>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							Posts <span class="badge badge-pill float-right">305</span>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							Users <span class="badge badge-pill float-right">120</span>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							Views <span class="badge badge-pill float-right">509</span>
						</a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="card">
						<div class="list-group">
							<p class="list-group-item active font-weight-bold" id="js-board">
								Overview of Journal System
							</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron">
										<span>
											<i class="fas fa-file-alt"></i> 
											<span class="font-weight-bold">40</span>
										</span>
										<h4>Pages</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron">
										<span>
											<i class="fas fa-user"></i> 
											<span class="font-weight-bold">120</span>
										</span>
										<h4>Users</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron">
										<span>
											<i class="fas fa-edit"></i>
											<span class="font-weight-bold">305</span>
										</span>
										<h4>Posts</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron">
										<span>
											<i class="fas fa-eye"></i>
											<span class="font-weight-bold">509</span>
										</span>
										<h4>Views</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>
	
	<script type="text/javascript">
		var times =document.getElementById('times');
		times.addEventListener('click', closeMenu);

		var menu = document.getElementById('menu');
		menu.addEventListener('click', openMenu);

		function openMenu() {
		 	menu.style.display = 'none';
			times.style.display ='block';
		}

		function closeMenu() {
			menu.style.display = 'block';
			times.style.display = 'none';
		}
		
	</script>
</body>
</html>