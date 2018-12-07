<?php
	require 'db.php';

	$message 	= '';
	$emailErr 	= '';
	$fnameErr	= '';
	$lnameErr 	= '';
	$pwdErr 	= '';
	$conpwdErr 	= '';
	$pnumErr 	= '';
	$countryErr = '';
	$genderErr 	= '';
	$userDetail = '';
	$loginLocation = '';

	if(isset($_POST['submit'])){
		$email 		= 	checkInput($_POST['email']);
		$fname 		= 	checkInput($_POST['fname']);
		$lname		= 	checkInput($_POST['lname']);
		$password 	= 	checkInput($_POST['password']);
		$conpwd 	=	checkInput($_POST['conpwd']);
		$pnum 		=	checkInput($_POST['pnum']);
		$country 	= 	checkInput($_POST['country']);

		if (empty($email) && empty($fname) && empty($lname) && empty($password) && empty($conpwd) && empty($pnum) && empty($country)) {
			
			$message = 'All fields are required';
		} else {

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = '* please enter a valid email address'; 
    		}

			if (is_numeric($fname)) {
				$fnameErr = '* only letters are required';
			} else if ($fname == "") {
				$fnameErr = '* please enter your first name';
			}

			if (is_numeric($lname)) {
				$lnameErr = '* only letters are required';
			} else if ($lname == "") {
				$lnameErr = '* please enter your last name';
			}

    		if (strlen($password) < 6 || strlen($password) > 8) {
    			$pwdErr = '* password should be 6-8 characters';
    		}

    		if ($password != $conpwd) {
    			$conpwdErr = '* password does not match';
    		}

    		if (!is_numeric($pnum)) {
				$pnumErr = '* only numbers are required';
			} else if (strlen($pnum < 8) && strlen($pnum > 15)) {
				$pnumErr = '* should be not be less than 8 and greater than 15 digit';
			}

			if ($country == "choose country") {
				$countryErr = '* please choose a country';
			}

			if (!isset($_POST['gender'])) {
				$genderErr = '* please choose your gender';
			}
		}
	}

	if(isset($_POST['submit'])){
		$email 		= 	checkInput($_POST['email']);
		$fname 		= 	checkInput($_POST['fname']);
		$lname		= 	checkInput($_POST['lname']);
		$password 	= 	md5(checkInput($_POST['password']));
		$pnum 		=	checkInput($_POST['pnum']);
		$country 	= 	checkInput($_POST['country']);

		if (!empty($email) && !empty($fname) && !empty($lname) && !empty($password) && !empty($pnum) && !empty($country) && !empty($_POST['gender'])) {
			
			$query = "SELECT `Email` FROM `users` WHERE `Email` = '$email'";
			$query_run = mysqli_query($conn, $query);

			if (mysqli_num_rows($query_run) == 1) {
				$userDetail = "user details already exist, you can login to your account";
				$loginLocation = 'click <a href = "home.php">here</a> to redirect to login page';
			} else { 
				$query_insert = "INSERT INTO `users` (`id`, `firstName`, `lastName`, `Email`, `password`, `phoneNumber`, `country`, `gender`)  VALUES('','$fname', '$lname', '$email', '$password', '$pnum','$country', '".$_POST['gender']."')";
				$query_insert_run = mysqli_query($conn, $query_insert);

				if ($query_insert_run) {
					header('location:home.php');
				} else {
					echo "<script> alert('Application is unsuccessful!')</script>";
				}
			}
		}
	}

	function checkInput($userinput) {
	 	$userinput = trim($userinput);
	 	$userinput = stripslashes($userinput);
	 	$userinput = htmlspecialchars($userinput);
	 	return $userinput;
	}

?>
