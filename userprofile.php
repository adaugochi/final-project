<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>my profile</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<style>
		nav, #dashboard {
			background-color: #3399CC;
		}
	</style>

	<nav class="navbar navbar-expand-sm">
		<div class="container">
			<a class="navbar-brand" href="#">
				<h1 class="font-weight-bold text-light">JS</h1>
			</a>
		</div>
	</nav>

	<div class="container mt-3">
		<div  class="row">
			<div class="col-sm-8" id="points">
				<div class="list-group">
					<a href="#" class="list-group-item active font-weight-bold" id="dashboard">
						Personal Information
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<b>Email Address</b>
						<span class="float-right"><?php echo $_SESSION['email']; ?></span>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<b>First Name</b>
						<span class="float-right text-justify"><?php echo strtolower($_SESSION['fname']); ?></span>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<b>Last Name</b>
						<span class="float-right"><?php echo strtolower($_SESSION['lname']); ?></span>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<b>Phone Number</b>
						<span class="float-right"><?php echo $_SESSION['pnum']; ?></span>
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<b>Country</b>
						<span class="float-right"><?php echo $_SESSION['country']; ?></span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>