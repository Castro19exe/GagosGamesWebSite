<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/gagos_games2.png" sizes="18x18">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
		Sign Up | Gagos Games
	</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'> </script>
	<style>
		body{
            background-image: url("../img/background3.png");
	        background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        }
   			
	    #form_control_R {
            width: 650px;
            height: 650px;
            margin: auto;
            text-align: center;
            background-color: white;
            border: none;
            -ms-transform: translate(0%, 5%);
            transform: translate(0%, 5%);
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
            width: 65%;
            height: 55px;
            padding: 5px 0px;
            background-color: #E5E5E5;
            color: black;
            border: none;
            font-size: 120%;
            font-family: Century Gothic;
            font-weight: none;
            border-bottom: 2px solid black;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            padding: 8px 12px;
            transition: border 0.2s;
        }

        .dados:hover {
            color: #C63A3A;
            border-bottom: 2px solid #C63A3A;
        }

        .dados:focus {
            color: #C63A3A;
            border-bottom: 2px solid #C63A3A;
        }

        .dados_warning {
            width: 65%;
            margin: auto;
            text-align: center;
            font-family: Century Gothic;
            background-color: #878787;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .submit {
            width: 50px;
            height: 50px;
            margin-top: 1.5%;
            font-family: Ink Free;
            font-size: 150%;
            color: #E6E6E6;
            background-color: #AE4242;
            border: 1px solid;
            border-radius: 50px;
            border-color: #AE4242;
            transition: width 0.7s, background-color 0.3s, border-radius 1s;
            }

        .submit:hover {
            outline: 0;
            width: 65%;
            border-radius: 0px;
            color: white;
            background-color: #C63A3A;
            border-color: #C63A3A;
        }

        .hide {
            display: none;
        }

        .erro {
            position: absolute;
            height: 45px;
            top: 0%;
            right: 3%;
            bottom: 0;
            font-size: 100%;
            font-family: Century Gothic;
            color: white;
            background-color: #A44045;
            border-bottom: 3px solid #5F0C0C;
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.5s;
            animation-name: animatetop;
            animation-duration: 0.5s
        }

        @-webkit-keyframes animatetop {
            from {
                top: 0px;
            }
            to {
                top: 1;
            }
        }

        @keyframes animatetop {
            from {
                top: -100px;
            }
            to {
                top: 1;
            }
        }

        .goback {
            outline-color: none;
            width: 650px;
            height: 40px;
            margin: auto;
            margin-top: 0%;
            font-family: Ink Free;
            font-size: 170%;
            color: black;
            background-color: white;
            border: none;
            -ms-transform: translate(94.6%, 80%);
            transform: translate(94.6%, 80%);
            transition: background-color 0.3s, color 0.3s;
        }

        .goback:hover {
            outline: 0;
            background-color: #C63A3A;
            color: white;
            font-stretch: normal;
        }
    </style>
</head>
<body>
	<form id="form_control_R" action="Register_Conf.php" method="POST">
        <br>

	    <h1 align="center" class="tit"> SIGN UP </h1>

	    <p align="center" class="info_reg"> Before we let you use this site, <br> we need you to sign up please. </p> 
        
		<div class="form-group" style="margin-top: 4%;">
            <input type="text" name="username" class="dados" placeholder="Username">
        </div>
        <div class="" style="margin-top: 4%;">
            <input type="password" name="password" class="dados" placeholder="Password">
        </div>
        <div class="dados_warning">
            <p> password must contain at least 6 characters, with 1 number and 1 letter. </p>
        </div>
        <div class="form-group" style="margin-top: 4%;">
            <input type="password" name="confirm_password" class="dados" placeholder="Confirm Password">
        </div>
        <div class="form-group" style="margin-top: 4%;">
            <input type="email" name="email" class="dados" placeholder="E-mail">
        </div>
        <div class="form-group">
            <button type="submit" class="submit"> ⟶ </button>
        </div>
    </form>

    <div class="form-group 
        <?php 
            if(empty($_SESSION['status']))
                echo("hide");
        ?>
    ">
        <span class="erro">
            <?php if(!empty($_SESSION['status']))
                echo $_SESSION['status']; 
                unset($_SESSION['status']);
            ?>
        </span>
    </div>
    
    <!-- JavaScript - JavaScript - JavaScript - JavaScript - JavaScript - JavaScript -->

</body>
</html>