<?php
	session_start();
	require 'db.php';

	if (isset($_POST['editbtn'])) {
		$id = $_POST['edit'];

		$query_edit = "SELECT title, post FROM posts WHERE id = $id";
		$run_query_edit = mysqli_query($conn, $query_edit);
		$edit_row = mysqli_fetch_array($run_query_edit);
			$title = $edit_row['title'];
			$post  = $edit_row['post'];
	}

	if (isset($_POST['update_post'])) {
	 	$edit_title = mysqli_escape_string($conn, strtolower($_POST['edit_title']));
	 	$edit_post  = mysqli_escape_string($conn, strip_tags($_POST['edit_post']));
	 	$edit_id 	= trim($_POST['edit_id'], "'");
	 	$user_id 	= $_SESSION['userid'];
	 	
	 	if (!empty($edit_title) && !empty($edit_post)) {
			$query_update = "UPDATE `posts` SET `title` = '$edit_title', `post` = '$edit_post' WHERE `id` = '$edit_id'";
			$run_query_update = mysqli_query($conn, $query_update);

			if ($run_query_update) {
			 	header('location:welcome.php');
			} else {
				echo "<script> alert('post not updated')</script>";
			} 
	 	}
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit post</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="jumbotron mt-3 container">
		<h2 class="text-center" id="postheader">Edit Post</h2>
			<form method="post" action="edit.php">
				<input type="text" hidden="true" name="edit_id" value="<?php echo $id; ?>">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-1">
							<label for="title" class="font-weight-bold">Title</label>
						</div>
						<div class="col-sm-11">
							<input type="text" class="form-control" name="edit_title" value="<?php echo $title; ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-1">
							<label for="title" class="font-weight-bold">Post</label>
						</div>
						<div class="col-sm-11">
							<textarea name="edit_post" class="form-control" rows="6">
								<?php echo $post; ?>
							</textarea>
						</div>
					</div>
				</div>
				<button name="update_post" class="btn btn-dark float-right">Update Post</button>
			</form>
		</div>
</body>
</html>