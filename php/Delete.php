<?php
    session_start();
    include 'Config.php';

    if (isset($_POST['delete_btn'])) {
 
        $id = $_POST['delete_id'];
        $consulta = "SELECT * FROM `users` WHERE id = '$id'";
        $resultado = mysqli_query($conn, $consulta);
        $row = $resultado -> fetch_assoc();
        $is_admin = $row['is_admin'];

        if ($is_admin == 1) {
            $_SESSION['status'] = "<div class='alert_error'> <strong> Error! </strong> You can't delete an ADMIN account. </div>";
            header('Location: Gerir.php');
        }
        else {
            $query = "DELETE FROM `users` WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            if($result == TRUE) {
                $_SESSION['status'] = "<div class='alert_success'> <strong> Success! </strong> Account deleted with success. </div>";
                header("location: Gerir.php");
            }
        }
    }
?>