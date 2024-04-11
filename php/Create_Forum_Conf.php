<?php
	session_start();
	include 'Config.php';
    
    $name = $_POST['name'];
	$descricao = $_POST['descricao'];
    $assunto = $_POST['assunto'];
    $user_creat = $_SESSION['login']['id'];
	$data = date("Y-m-d H:i:s");

	if(empty($name) || empty($descricao) || empty($assunto)) {
		$_SESSION['status'] = "<i class='fa fa-times-circle' style='font-size: 25px;'> </i> You must complete all fields requested! <i class='fa fa-times-circle' style='font-size: 25px;'> </i>";
		header("Location: Create_Forum.php");
	}
	else {
        $sql = "INSERT INTO `forums` (`name`, `descricao`, `assunto`, `id_user`, `created_at`) VALUES ('$name', '$descricao', '$assunto', '$user_creat', '$data') ";

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