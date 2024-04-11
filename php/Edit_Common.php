<?php
	session_start();
    include 'Config.php';

    if(isset($_POST['btn_update'])) {
        
        $id = $_SESSION['login']['id'];
        $username = $_POST['edit_username'];
        $password = $_POST['edit_password'];
        $email = $_POST['edit_email'];

        if(!empty($password)) {
            $sql = "UPDATE `users` SET `username` = '$username', `password` = MD5('$password'), `email` = '$email' WHERE `id` = '$id'";
        } else {
            $sql = "UPDATE `users` SET `username` = '$username', `email` = '$email' WHERE `id` = '$id'";
        }

        $query_run = mysqli_query($conn, $sql);

        if($query_run == TRUE) {
            $_SESSION['login']['username'] = $username;
            $_SESSION['login']['email'] = $email;
            $_SESSION['status'] = "<div class='alert_success'> <strong> Success! </strong> Account changed with success. </div>";
            header("Location: Edit_Gerir_Common.php");
        } else {
            $_SESSION['status'] = "<div class='alert_error'> <strong> Error! </strong> Account changed with failure. </div>";
            header("Location: Edit_Gerir_Common.php");
        }
    }

    $conn->close();

?>