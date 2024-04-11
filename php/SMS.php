<?php
	session_start();
	include 'Config.php';
    
	$form = $_SESSION['login']['id'];
    $user_creat = $_SESSION['login']['id'];
    $mensage = $_POST['mensage'];
	$data = date("Y-m-d H:i:s");

	if(empty($mensage)) {
		$_SESSION['status'] = "Type Something";
		header("Location: Create_Forum.php");
	}
	else {
        $sql = "INSERT INTO `comments` (`id_forum`, `id_user`, `comment`, `created_at`) VALUES ('$form', '$user_creat', '$mensage', '$data') ";

		if ($conn-> query ($sql) == TRUE) {
	    	header("Refresh: 0; url = Forums_Log.php");
        } 
        else {
	    	$_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
			header("Location: Create_Forum.php");
		}
	}
	
	$conn->close();

?>