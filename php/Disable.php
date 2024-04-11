<?php

    session_start();
    include 'Config.php';

    if (isset($_POST['disable_btn'])) {
    
        $id = $_POST['disable_id'];
        $consulta = "SELECT * FROM `users` WHERE id = '$id'";
        $resultado = mysqli_query($conn, $consulta);
        $row = $resultado -> fetch_assoc();
        $is_admin = $row['is_admin'];
        $is_disable = $row['is_disable'];

        if ($is_admin == 1) {
            $_SESSION['status'] = "<div class='alert_error'> <strong> Error! </strong> You can't disable an ADMIN account. </div>";
            header('Location: Gerir.php');
        }
        else {
            if ($is_disable == 1) {
                $query = "UPDATE `users` SET is_disable = 0 WHERE id = '$id'";
                $result = mysqli_query($conn, $query);

                if($result == True) {
                    $_SESSION['status'] = "<div class='alert_success'> <strong> Success! </strong> Account activated with success. </div>";
                    header('Location: Gerir.php');
                }
                else {
                    $_SESSION['status'] = "<div class='alert_error'> <strong> Error! </strong> Account activated with failure. </div>";
                    header('Location: Gerir.php');
                }
            } 
            else {
                $query = "UPDATE `users` SET is_disable = 1 WHERE id = '$id'";
                $result = mysqli_query($conn, $query);

                if($result == True) {
                    $_SESSION['status'] = "<div class='alert_success'> <strong> Success! </strong> Account deactivated with success. </div>";
                    header('Location: Gerir.php');
                }
                else {
                    $_SESSION['status'] = "<div class='alert_error'> <strong> Error! </strong> Account deactivated with failure. </div>";
                    header('Location: Gerir.php');
                }
            }
        }
    }

?>

    