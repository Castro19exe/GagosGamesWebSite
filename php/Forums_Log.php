<?php 
    session_start();
    include 'Config.php';
    include "Verification.php";
    
    $select = "SELECT * FROM `forums` INNER JOIN `users` on forums.id_user = users.id ORDER BY forums.created_at DESC";
    $result = mysqli_query($conn, $select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/gagos_games2.png" sizes="18x18">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'> </script>
    <title>
        Forums | Gagos Games
    </title>
    <style>
        .create {
            position: fixed;
            cursor: pointer;
            outline: none;
            z-index: 1;
            width: 70px;
            height: 70px;
            bottom: 15px;
            right: 20px;
            font-size: 190%;
            color: white;
            background-color: #BDBDBD;
            border: 4px solid #BDBDBD;
            border-radius: 50%;
            -webkit-box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            -moz-box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            transition: border 0.4s, color 0.4s, background-color 0.4s, box-shadow 0.4s;
        }

        .create:hover {
            color: rgba(198, 58, 58, 0.75);
            background-color: #BDBDBD;
            border: 4px solid #BDBDBD;
            -webkit-box-shadow: 0px 1px 30px -1px rgba(198, 58, 58, 0.75);
            -moz-box-shadow: 0px 1px 30px -1px rgba(198, 58, 58, 0.75);
            box-shadow: 0px 1px 30px -1px rgba(198, 58, 58, 0.75);
        }

        .forums {
            width: ;
            font-family: Century Gothic;
            font-weight: bold;
            background-color: #BDBDBD;
            background-size: cover;
            border: 1.5px solid #BDBDBD;
            -webkit-box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            -moz-box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            box-shadow: 0px 1px 25px -4px rgba(198, 58, 58, 0.75);
            transition: box-shadow 0.4s;
        }

        .forums:hover {
            -webkit-box-shadow: 0px 1px 36px -1px rgba(198, 58, 58, 0.75);
            -moz-box-shadow: 0px 1px 36px -1px rgba(198, 58, 58, 0.75);
            box-shadow: 0px 1px 30px -1px rgba(198, 58, 58, 0.75);
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="TOP"> <i class="fas fa-arrow-up"> </i> </button>

    <a href="Create_Forum.php"> <button class="create" title="create a forum"> <i class="fas fa-plus"> </i> </button> </a>

    <div class="topnav" id="myTopnav">
        <a href="Index_Log.php"> <img src="../img/gagos_games2.png" title="Gagos Games" id="logo"> </a>
        <a href="Index_Log.php"> <i class="fa fa-home" style="font-size: 20px;"> </i> Home </a>
        <a href=""> <i class="fa fa-gamepad" style="font-size: 20px;"> </i> Games </a>
        <a href="Forums_Log.php"> <i class="fas fa-comments" style="font-size: 20px;"> </i> Forums </a>
        <div class="dropdown" style="float: right; padding: 0px 0px;">
            <button class="dropbtn"> <?php echo $_SESSION['login']['username']; ?> <i class="fas fa-caret-down" style="font-size: 20px;"> </i> </button>
            <div class="dropdown-content">
                <?php if($_SESSION['login']['is_admin'] == 1) 
                    echo "<a href='Gerir.php'> <i class='fas fa-tools' style='font-size: 19px;'> </i> Admin Tools </a>"
                ?>
                <a href="Edit_Gerir_Common.php"> <i class="fas fa-user-circle" style="font-size: 22px;"> </i> Account </a>
                <a href="Logout.php"> <i class="fas fa-sign-out-alt" style="font-size: 22px;"> </i> Logout </a>
            </div>
        </div>
        <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()"> &#9776; </a>
    </div>

    <?php foreach($result as $dados) { ?>
        <div style="padding: 30px 150px;">
            <a href="Chat.php" style="text-decoration: none; color: #C63A3A;">
                <div class="forums">
                    <p style="padding: 0px 30px; float: right;"> Created By: <?php echo $dados['username'] ?> </p>
                    <h1 style="padding: 0px 30px;"> <?php echo $dados['name'] ?> </h1>
                    <p style="padding: 0px 30px;"> <?php echo $dados['descricao'] ?> </p>
                    <?php if($_SESSION['login']['is_admin'] == 1) 
                        echo "<a href='Gerir_Forums.php' style='text-decoration: none; color: #C63A3A;'> <p style='padding: 0px 30px'> <i class='fas fa-tools' style='font-size: 19px;'> </i> EDIT </p> </a>"
                    ?>
                </div>
            </a>
        </div>
    <?php } ?>
 
    <!-- JavaScript - JavaScript - JavaScript - JavaScript - JavaScript - JavaScript -->

    <!-- Resolution     -->

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } 
        else {
            x.className = "topnav";
        }
    }
    </script>

</body>
</html>