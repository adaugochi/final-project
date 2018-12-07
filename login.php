<?php
	
	session_start();

	require "db.php";

	if(isset($_POST['login'])){
		$email 		= 	checkInput($_POST['email']);
		$password 	= 	md5(checkInput($_POST['password']));

		if (!empty($email) && !empty($password)) {
			
			$query = "SELECT * FROM `users` WHERE `Email` = '$email' AND `password` = '$password'";
			$query_run = mysqli_query($conn, $query);

			if (mysqli_num_rows($query_run) == 1) {
				while ($query_row = mysqli_fetch_array($query_run)) {
					$_SESSION['fname'] 	 = strtoupper($query_row['firstName']);
					$_SESSION['lname'] 	 = strtoupper($query_row['lastName']);
					$_SESSION['email'] 	 = $query_row['Email'];
					$_SESSION['pnum']	 = $query_row['phoneNumber'];
					$_SESSION['country'] = $query_row['country'];
					$_SESSION['userid']	 = $query_row['id'];
				}	
				header('location:welcome.php');

			} else {
				echo "Invalid login credentials";
			}
		} else {
			echo "Please enter your login credentials";
		}
	}



	function checkInput($userinput) {
		$userinput = trim($userinput);
		$userinput = stripslashes($userinput);
		$userinput = htmlspecialchars($userinput);
		return $userinput;
	}
?>