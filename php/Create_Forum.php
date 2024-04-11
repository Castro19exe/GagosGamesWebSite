<?php 
    session_start();
    include 'Config.php';
    include "Verification.php";
    /*
    $select = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $select);
    */
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
        Create Your Own Forum | Gagos Games
    </title>
    <style>
        body{
            background-image: url("../img/background3.png");
	        background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        }
   			
	    #form_control_F {
            width: 65%;
            height: 700px;
            margin: auto;
            text-align: center;
            background-color: white;
            border: none;
            -ms-transform: translate(0%, 0%);
            transform: translate(0%, 0%);
	        }

        .tit {
            color: black;
            font-size: 420%;
            font-family: Bradley Hand ITC;
            font-weight: bold;
        }

        .info_reg {
            color: black; 
            font-family: Gabriola;
            font-size: 150%;
        }

        .dados {
            outline: none;
            width: 85%;
            height: 55px;
            padding: 5px 12px;
            background-color: #E5E5E5;
            color: black;
            border: none;
            font-size: 120%;
            font-family: Book Antiqua;
            font-weight: none;
            border-bottom: 2px solid black;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            
            transition: border 0.3s, border-radius 0.5s;
        }

        .dados:hover {
            color: #C63A3A;
            border-bottom: 2px solid #C63A3A;
        }

        .dados:focus {
            color: #C63A3A;
            border-bottom: 2px solid #C63A3A;
        }

        .submit {
            cursor: pointer;
            width: 50px;
            height: 50px;
            margin-top: 3%;
            font-family: Ink Free;
            font-size: 150%;
            color: #E6E6E6;
            background-color: #AE4242;
            border: 1px solid;
            border-radius: 50px;
            border-color: #AE4242;
            transition: width 0.7s, background-color 0.3s, border-radius 1.0s;
            }

        .submit:hover {
            outline: 0;
            width: 85%;
            border-radius: 0px;
            color: white;
            background-color: #C63A3A;
            border-color: #C63A3A;
        }

        .hide {
            display: none;
        }

        .erro {
            color: black;
            font-size: 160%;
            font-family: Book Antiqua;
            position: relative;
            animation-name: erro;
            animation-duration: 0.7s;
            animation-iteration-count: infinite;
        }

        @keyframes erro {
            0%   {color: black;}
            25%  {color: #760E0E;}
            50%  {color: #A31111;}
            75%  {color: #760E0E;}
            100% {color: black;}
        }

        .goback {
            cursor: pointer;
            outline-color: none;
            width: 65%;
            height: 50px;
            margin: auto;
            margin-top: 0%;
            font-family: Ink Free;
            font-size: 170%;
            color: black;
            background-color: white;
            border: none;
            -ms-transform: translate(26.95%, 0%);
            transform: translate(26.95%, 0%);
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        .goback:hover {
            outline: 0;
            background-color: #C63A3A;
            color: white;
            font-stretch: normal;
            transform: translate(26.95%, 25%);
        }
    </style>
</head>
<body>
    <form id="form_control_F" action="Create_Forum_Conf.php" method="POST">
        <br>

	    <h1 align="center" class="tit"> CREATE YOUR OWN FORUM </h1>

	    <p align="center" class="info_reg"> Preenche os campos abaixo. </p> 
        
		<div class="form-group" style="margin-top: 4%;">
            <input type="text" name="name" class="dados" placeholder="Nome">
        </div>
        <div class="" style="margin-top: 4%;">
            <input type="text" name="descricao" class="dados" placeholder="Descrição">
        </div>
        <div class="form-group" style="margin-top: 4%;">
            <input type="text" name="assunto" class="dados" placeholder="Assunto">
        </div>
        <div class="form-group">
            <button type="submit" class="submit"> ⟶ </button>
        </div>
        <div class="form-group 
                        <?php 
                            if(empty($_SESSION['status']))
                                echo("hide");
                        ?>
                    ">
            <span class="erro"><?php if(!empty($_SESSION['status']))
                            echo $_SESSION['status']; 
                            unset($_SESSION['status']);
                        ?>
            </span>
        </div>
    </form>

    <button onclick="goBack()" class="goback"> ⟵ </button>

    <!-- JavaScript - JavaScript - JavaScript - JavaScript - JavaScript - JavaScript -->

    <!-- Go back history -->

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
</body>
</html>