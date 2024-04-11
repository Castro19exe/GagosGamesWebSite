<?php
	session_start();
	include 'Config.php';

	$username = $_POST['username'];
	$pass = $_POST['password'];

	if(empty($username) || empty($pass)) {
		$_SESSION['status'] = "<p style='padding: 10px;'> You must complete all fields requested </p>";
		header("Location: Login.php");
	} else {
		$sql = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = MD5('$pass') ";
		$result = mysqli_query($conn, $sql);
		$row = $result -> fetch_assoc();
		$_SESSION['login'] = $row;
		$count = mysqli_num_rows($result);
		if($count == 1) {
			if($_SESSION['login']['is_admin'] == 1) {
				header("location: Authorization.php");
			}
			else {
				header("location: Authorization.php");
			}

			if($_SESSION['login']['is_disable'] == 1) {
				header("location: Alert_Disable.php");
				session_destroy();
			}
			else {
				header("location: Authorization.php");
			}
		}
		else {
         	$_SESSION['status'] = "<p style='padding: 10px;'> Your username or password is invalid </p>";
         	header("location: Login.php");
		}
	}

	$conn->close();

?>