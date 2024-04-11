<?php
    session_start();
    if($_SESSION['login']['is_admin'] == 0) {
        // echo "nao autorizado";
        header("Refresh: 0; url = Index_Log.php");
    }
    else 
    // echo "Welcome ADMIN";
    header("Refresh: 0; url = Gerir.php");
?>
