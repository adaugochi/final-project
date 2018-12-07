<?php
	include 'regusers.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!--font-awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<style type="text/css">
		@media screen and (min-width: 320px) and (max-width: 768px){
			#login {
				margin-left: 0px;
			}
		}
		body {
			background-color: whitesmoke;
		}
		nav, .card-header{
			background-color: #3399CC;
		}
		.navbar-nav .nav-item {
			margin-left: 20px;
		}
		.text-danger {
			font-size: 11px;
		}
	</style>
</head>
<body>

	<section>
		<nav class="navbar navbar-expand-sm">
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
	</section>


	<div class="row my-5">
		<div class="col-sm-6 mx-auto">
			<div class="card">
			    <div class="card-header text-center"><h4>Register</h4></div>
			    <div class="card-body">
			    	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="regForm" onsubmit="return validateForm()">
			    		<span class="text-danger">
			    			 * required <br> <?php echo $message; echo $userDetail; ?> 
			    		</span>
			    		<br>
			    		<span>
			    			<?php echo $loginLocation; ?>
			    		</span>
			    		<div class="container">
				   			<div class="form-group">
				    			<label for="email">Email</label>
				    			<input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter email">
				    			<span class="text-danger" id="emailErr"> <?php echo $emailErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="fname">First Name</label>
				    			<input type="text" class="form-control form-control-sm" name="fname"  id="fname" placeholder="Enter first name">
				    			<span class="text-danger" id="fnameErr"> <?php echo $fnameErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="lname">Last Name</label>
				    			<input type="text" class="form-control form-control-sm id="lname" name="lname" placeholder="Enter last name">
				    			<span class="text-danger" id="lnameErr"> <?php echo $lnameErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="password">Password</label>
				    			<input type="password" class="form-control form-control-sm" id="pwd" name="password" placeholder="Enter password">
				    			<span class="text-danger" id="passwordErr"> <?php echo $pwdErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="password">Confirm Password</label>
				    			<input type="password" class="form-control form-control-sm" id="Cpwd" name="conpwd" placeholder="Enter password">
				    			<span class="text-danger" id="conpwdErr"> <?php echo $conpwdErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="pnum">Phone Number</label>
				    			<input type="text" class="form-control form-control-sm" id="pnum" name="pnum" placeholder="Enter phone number">
				    			<span class="text-danger"> <?php echo $pnumErr; ?></span>
				    		</div>
				    		<div class="form-group">
				    			<label for="country">Country</label>
				    			<select class="custom-select custom-select-sm" id="country" name="country">
				    				<option value="choose country">choose country</option>
				    			</select>
				    			<span class="text-danger" id="countryErr"> <?php echo $countryErr; ?></span>
				    		</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label for="gender" id="gender" style="padding-right: 80px;">Gender</label>
									</div>
									<div class="col-sm-4">
									    <div class="custom-control custom-radio">
										    <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="male">
										    <label class="custom-control-label" for="customRadio">Male</label>
										</div> 
									</div>
									<div class="col-sm-4">
									    <div class="custom-control custom-radio">
										    <input type="radio" class="custom-control-input" id="customRadio1" name="gender" value="female">
										    <label class="custom-control-label" for="customRadio1">Female</label>
										</div>
									</div>
									<span class="text-danger" id="genderErr"> <?php echo $genderErr; ?></span>
								</div>
							</div>
							<button name="submit" class="btn btn-outline-primary" id="register" style="margin-left: 250px;">Register</button>		    	
						</div>
			    	</form>
			    </div> 
			</div>
		</div>
	</div>

	<script src="country.js"></script>
	<script src="validate.js"></script>
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