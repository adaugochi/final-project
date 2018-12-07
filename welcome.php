<?php
	session_start();

	require 'db.php';
	$insert_message = '';
	$insert = '';
	$users_id 	= $_SESSION['userid'];


	if (isset($_POST['submit_post'])) {
		$title 		= mysqli_escape_string($conn, strtolower($_POST['title']));
		$post  		= mysqli_escape_string($conn, strtolower(strip_tags($_POST['post'])));
		$date 		= date('Y:m:d h:i:s');

		if (!empty($title) && !empty($post)) {
			echo $users_id;
			echo $title;
			echo $date;
			echo $post;
			$query_insert_post = "INSERT INTO posts (users_id, title, post, created_at) VALUES('$users_id', '$title', '$post', '$date')";
			$query_insert_post_run = mysqli_query($conn, $query_insert_post);

			if ($query_insert_post_run) {
				$insert_message = "Post created successful!";
				header("location: welcome.php?response=$insert_message");
			} else {
				$insert = "not inserted";
			}
		} else {
			$insert_message = "you have not write a title or post";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!--font-awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<style>
		nav {
			background-color: #3399CC;
		}
		#postheader {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-sm">
		<div class="container">
			<a class="navbar-brand" href="#">
				<h1 class="font-weight-bold text-light">JS</h1>
			</a>
			<a href="userprofile.php" class="text-light">My profile</a>
			<a href="logout.php" class="btn btn-outline-dark float-right">Logout</a>
		</div>
	</nav>
	<br>
	<!--using php session variable-->
	<div class="container">
		<h3 class="text-center lead display-4"> 
			<?php 
				if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
					echo "Welcome ". $_SESSION['fname']." ".$_SESSION['lname']. "<br>";
				}
			?>
		</h3>
	</div>

	<div class="container">
		<div class="row mt-5">
			<div class="col-sm-8 mx-auto">
				<span class="text-success">
					<?php echo $insert;?>			
				</span>
				<div class="jumbotron pb-5s">
					<h2 class="text-center" id="postheader">Create A Post</h2>
					<form method="post" action="welcome.php">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-1">
									<label for="title" class="font-weight-bold">Title</label>
								</div>
								<div class="col-sm-11">
									<input type="text" class="form-control" name="title">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-1">
									<label for="title" class="font-weight-bold">Post</label>
								</div>
								<div class="col-sm-11">
									<textarea name="post" class="form-control" rows="6"></textarea>
								</div>
							</div>
						</div>
						<button name="submit_post" class="btn btn-dark float-right">Create Post</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br><br>

	<div class="container">
		<div class="row">
			<div class="mx-auto col-sm-8">
				<div>
					<?php 
						$query_get_post = "SELECT id, title, post FROM posts WHERE users_id = ".$_SESSION['userid']."";
						$run = mysqli_query($conn, $query_get_post);
						$row_count = mysqli_num_rows($run);
						if ($row_count > 0) {
							while ($row = mysqli_fetch_array($run)) {
								$_SESSION['id']	   = $row['id'];
								$_SESSION['title'] = strtoupper($row['title']);
								$_SESSION['post']  = $row['post'];

								echo '<div class="card">';
					?>
							<div class="card-header">
								<?php echo $_SESSION['title']; ?>
							</div>
							<div class="card-body">
								<?php echo $_SESSION['post']; ?>
							</div>
							<div class="card-footer">
								<form method="post" action="edit.php">
									<input type="text" hidden="true" name="edit" value="<?php echo $_SESSION['id']; ?>">
								  	<button name="editbtn" class="btn btn-sm btn-warning">
								  		Edit
								  	</button>
								</form>
								<form method="post" action="delete.php">
									<input type="text" hidden="true" name="delete" value="<?php echo $_SESSION['id']; ?>'">
									<button class="btn btn-sm btn-danger float-right" name="deletebtn" style="margin-top: -28px;">
								  		Delete
									</button>
								</form>
							</div>
					<?php
								echo '</div> <br>';
							}
						} else {
							echo "you have not created any post yet";
						}		
					?>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>