<?php
    if ($_SESSION['login']['is_admin'] == 0) {
        header("location: Alert_Admin.php");
        session_destroy();
    }
?>