<?php 
    session_start();
    include 'Config.php';

    $select = "SELECT * FROM `forums` INNER JOIN `users` on forums.id_user = users.id";
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
            transition: border 0.4s, background-color 0.4s, box-shadow 0.4s;
        }

        .create:hover {
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
            color: #C63A3A;
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

    <a href="Login.php"> <button class="create" title="create a forum"> <i class="fas fa-plus"> </i> </button> </a>

    <div class="topnav" id="myTopnav">
        <a href="../Index.php"> <img src="../img/gagos_games2.png" title="Gagos Games" id="logo"> </a>
        <a href="../Index.php"> <i class="fa fa-home" style="font-size: 20px;"> </i> Home </a>
        <a href="Games.php"> <i class="fa fa-gamepad" style="font-size: 20px;"> </i> Games </a>
        <a href=""> <i class="fas fa-comments" style="font-size: 20px;"> </i> Forums </a>
        <!--
        <div class="dropdown">
            <button class="dropbtn"> More <i class="fa fa-caret-down" style="font-size: 20px;"> </i> </button>
            <div class="dropdown-content">
                <a href="#video"> <i class="fab fa-unity" style="font-size: 20px;"> </i> Unity </a>
                <a href="#about_us_team"> <i class="fas fa-users" style="font-size: 20px;"> </i> Team </a>
                <a href="#about_us_story"> <i class="fas fa-book" style="font-size: 20px;"> </i> Story </a>
            </div>
        </div>
        -->
        <a style="float: right; padding: 40px;" href="Login.php"> <i class="fas fa-sign-in-alt" style="font-size: 20px;"> </i> Sign In </a>
        <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()"> &#9776; </a>
    </div>

    <?php foreach($result as $dados) { ?>
        <div style="padding: 30px 150px;">
            <a href="Chat.php" style="text-decoration: none;">
                <div class="forums">
                    <p style="padding: 0px 30px; float: right;"> Created By: <?php echo $dados['username'] ?> </p>
                    <h1 style="padding: 0px 30px;"> <?php echo $dados['name'] ?> </h1>
                    <p style="padding: 0px 30px;"> <?php echo $dados['descricao'] ?> </p>
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