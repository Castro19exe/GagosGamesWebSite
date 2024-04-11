<?php
	session_start();
	include 'Config.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$con_pass = $_POST['confirm_password'];
	$data = date("Y-m-d");

	if(empty($email) || empty($username) || empty($pass) || empty($con_pass)) {
		$_SESSION['status'] = "<p style='padding: 10px;'> You must complete all fields requested </p>";
		header("Location: Register.php");
	}
	elseif($pass!=$con_pass) {
		$_SESSION['status'] = "<p style='padding: 10px;'> Password doesn't match with the confirmation </p>";
		header("Location: Register.php");
	}
	elseif(strlen($pass) <= 5 ) {
		$_SESSION['status'] = "<p style='padding: 10px;'> Invalid password </p>";
		header("Location: Register.php");
	}
	elseif(!preg_match("#[0-9]+#", $pass)) {
		$_SESSION['status'] = "<p style='padding: 10px;'> Invalid password </p>";
		header("Location: Register.php");
	}
	elseif(!preg_match("#[a-z]+#", $pass)) {
		$_SESSION['status'] = "<p style='padding: 10px;'> Invalid password </p>";
		header("Location: Register.php");
	}
	else
	{
		$sql = "INSERT INTO `users` (`username`, `password`, `email`, `created_at`) VALUES ('$username', MD5('$pass'), '$email', '$data') ";

		if ($conn-> query ($sql) == TRUE) {
	    	header("Refresh: 0; url = Login.php");
		} else {
	    	$_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
			header("Location: Register.php");
		}
	}
	
	$conn->close();

?>

