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
        Games | Gagos Games
    </title>
    <style>
        .PAP_game {
            width: 80%;
            height: 450px;
            padding: 0px;
            font-family: Century Gothic;
            font-weight: bold;
            color: #C63A3A;
            background-image: url("../img/background6.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border-left: 5px solid #C63A3A;
            border-right: 5px solid #C63A3A;
            border-radius: 5px;
            transform: translate(12%, 15%);
            text-shadow: 0px 0px 11px rgba(0, 0, 0, 1);
            -webkit-box-shadow: 0px 0px 45px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 45px -3px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 45px -3px rgba(0, 0, 0, 0.75);
            transition: border 0.3s, color 0.3s, background-size 1s;
        }

        .btn_download {
            position: absolute;
            cursor: pointer;
            outline: none;
            top: 80%;
            left: 50%;
            width: 20%;
            margin-top: 0%;
            padding: 25px 25px;
            font-size: 120%;
            font-family: Century Gothic;
            font-weight: none;
            color: white;
            background-color: #C63A3A;
            background-size: cover;
            border: 0px dashed #C63A3A;
            border-radius: 0px;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            transition: color 0.3s, background-color 0.5s, border-color 0.3s, border-radius 0.3s;
        }

        .btn_download:hover {
            color: #C63A3A;
            background-color: white;
            border: 0px outset #C63A3A;
            border-top-right-radius: 0px;
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="TOP"> <i class="fas fa-arrow-up"> </i> </button>

    <div class="topnav" id="myTopnav">
        <a href="../Index.php"> <img src="../img/gagos_games2.png" title="Gagos Games" id="logo"> </a>
        <a href="../Index.php"> <i class="fa fa-home" style="font-size: 20px;"> </i> Home </a>
        <a href="Games.php"> <i class="fa fa-gamepad" style="font-size: 20px;"> </i> Games </a>
        <a href="Forums.php"> <i class="fas fa-comments" style="font-size: 20px;"> </i> Forums </a>
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

    <div class="PAP_game">
        <h1 style="text-align: center; font-size: 400%; cursor: default;"> Project PAP </h1>
        <p style="margin-top: 5%; text-align: center; font-size: 130%;"> dfsdfsdfsfseqeqeqeqeqeqeqeqeqeqeqeqeqeq </p>
        <a href="jogo.txt" download="jogo.txt">
            <button class="btn_download"> Download </button>
        </a>
    </div>

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