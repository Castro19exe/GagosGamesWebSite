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
		Sign In | Gagos Games
	</title>
	<style>
		body {
            background-image: url("../img/background3.png");
	        background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
        }

	    #form_control_L {
            width: 650px;
            height: 500px;
            margin: auto;
            margin-bottom: 0%;
            text-align: center;
            background-color: white;
            border: none;
            -ms-transform: translate(0%, 19%);
            transform: translate(0%, 19%);
        }

        .tit {
            margin-top: 3%;
            color: black;
            font-size: 420%;
            font-family: Bradley Hand ITC;
            font-weight: bold;
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

        .create {
            color: black;
            padding: 4px;
            font-size: 115%;
            font-family: Lucida Calligraphy;
        }

        .here {
            color: #A31111;
            text-decoration: none;
        }

        .here:hover {
            color: #C63A3A;
            text-decoration: underline;
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
            width: 34.95%;
            height: 40px;
            margin: auto;
            margin-top: 0%;
            font-family: Ink Free;
            font-size: 170%;
            color: black;
            background-color: white;
            border: none;
            -ms-transform: translate(92.8%, 250%);
            transform: translate(93.1%, 227%);
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
	<form id="form_control_L" action="Login_Conf.php" method="POST">
	    <br>

	    <h1 align="center" class="tit"> SIGN IN </h1>

        <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="dados" style="margin-top: 7%;">
        </div>
        <div class="form-group" style="margin-top: 4%;">
            <input type="password" name="password" class="dados" placeholder="Password">
        </div>
        <p class="create"> Create an account <a href="Register.php" class="here"> here </a> </p>
        <input type="checkbox" name="remember" style="margin-bottom: 15px;"> <font face="Lucida Calligraphy" style="color: black; font-size: 110%;"> Remember me </font>
        <div class="form-group">
            <button type="submit" class="submit"> ⟶ </button> 
        </div>
    </form>

    <!-- <button onclick="goBack()" class="goback"> ⟵ </button> -->

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

    <!-- Go back history 

    <script>
    function goBack() {
        window.history.back();
    }
    </script>

    -->
</body>
</html>