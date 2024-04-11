<?php
    if(empty($_SESSION['login'])) {
        header("location: Alert.php");
    }
?>