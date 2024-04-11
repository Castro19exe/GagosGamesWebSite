<?php 
    session_start();
    include 'Config.php';
    include "Verification.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/gagos_games2.png" sizes="18x18">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'> </script>
	<title>
		Edit Accounts | Gagos Games
	</title>
    <style>
        body {
            background-image: url("");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
            margin: 0;
        }

        .row {
            display: flex;
        }

        .left {
            flex: 22.5%;
            height: 1000px;
            padding: 0px 0px;
            color: white;
            background-color: #1D1D1D;
            border: 0px solid #000000;
            border-radius: 0px;
            box-shadow: 0px 0px 0px #000000 inset;
        }

        .right {
            flex: 100%;
            padding: 15px;
            background-color: white;
            border: 0px solid #D0D0D0;
            border-radius: 0px;
            box-shadow: 0px 0px 150px #8D8D8D inset;
        }

        #myMenu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myMenu li a {
            display: block;
            opacity: 1;
            width: 80%;
            padding: 15px 40px;
            text-decoration: none;
            font-family: Century Gothic;
            font-weight: bold;
            font-size: 150%;
            color: white;
            transition: color 0.3s;
        }

        #myMenu li a:hover {
            color: #656565;
        }

        .tit {
            text-align: center;
            margin-top: 3%;
            margin-bottom: 3%;
            text-align: center;
            font-size: 500%;
            font-family: Century Gothic;
            color: #7F7F7F;
        }
        
        .account_img {
            max-width: 80%;
            margin-top: 2.5%;
            margin-bottom: 2.5%;
            border: 2px solid #7F7F7F;
            border-radius: 100%;
        }

        .edit_account_img {
            cursor: pointer;
            margin-bottom: 0.5%;
            font-size: 100%;
            font-family: Century Gothic;
            color: #7F7F7F;
        }

        .label {
            font-size: 150%;
            font-family: Century Gothic;
            font-weight: bold;
            color: #7F7F7F;
        }
        
        .dados {
            outline: none;
            width: 50%;
            height: 55px;
            padding: 0px 12px;
            margin-top: 0.5%;
            margin-bottom: 1.5%;
            background-color: #E5E5E5;
            color: black;
            border: none;
            font-size: 120%;
            font-family: Century Gothic;
            font-weight: normal;
            border: 1px solid #7F7F7F;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #8D8D8D inset;
            transition: border 0.3s, border-radius 0.3s;
        }

        .dados:hover {

        }

        .dados:focus{
            border-radius: 0px;
        }

        .submit {
            cursor: pointer;
            min-width: 10%;
            height: 40px;
            margin-top: 1%;
            margin-bottom: 2%;
            margin-left: 5%;
            color: white;
            font-family: Century Gothic;
            font-size: 150%;
            background-color: #1C8AD6;
            border: 1px solid #0096FE;
            border-radius: 0px;
            transition: width 0.7s, background-color 0.3s, border 0.3s;
        }

        .submit:hover {
            outline: 0;
            color: white;
            background-color: #0096FE;
            border: 1px solid #0096FE;
            font-stretch: normal;
        }

        .reset {
            cursor: pointer;
            min-width: 10%;
            height: 40px;
            margin-top: 1%;
            margin-bottom: 2%;
            margin-left: 2%;
            padding: 4px 10px;
            text-decoration: none;
            font-family: Century Gothic;
            font-size: 150%;
            color: white;
            background-color: #BB2626;
            border: 1px solid #E21919;
            border-radius: 0px;
            transition: width 0.7s, background-color 0.3s, border 0.3s;
        }

        .reset:hover {
            outline: 0;
            color: white;
            background-color: #E21919;
            border: 1px solid #E21919;
            font-stretch: normal;
        }

        .hide {
            display: none;
        }

        .alert_error {
            width: 90%;
            margin: auto;
            margin-left: 5%;
            padding: 20px;
            font-size: 120%;
            font-family: Century Gothic;
            color: white;
            background-color: #C63A3A;
            border-radius: 5px;
            -webkit-animation-name: erro;
            -webkit-animation-duration: 0.5s;
            animation-name: erro;
            animation-duration: 0.5s;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .alert_success {
            width: 90%;
            margin: auto;
            margin-left: 5%;
            padding: 20px;
            font-size: 120%;
            font-family: Century Gothic;
            color: white;
            background-color: #11AB55;
            border-radius: 5px;
            -webkit-animation-name: erro;
            -webkit-animation-duration: 0.5s;
            animation-name: erro;
            animation-duration: 0.5s;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        /* Add Animation */
        @-webkit-keyframes erro {
            from {
                opacity: 0;
            } 
            to {
                opacity: 1;
            }
        }

        @keyframes erro {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .close {
            font-size: 30px;
            font-weight: normal;
            color: white;
            transition: color 0.3s;
        }

        .close:hover,
        .close:focus {
            cursor: pointer;
            text-decoration: none;
            color: #C63A3A;
        }
    </style>
    </head>
    <body>
        <div class="row">
            <div class="left">
                <h1 style="font-family: Century Gothic; font-size: 350%; text-align: center;"> Tools </h1>
                <hr style="border: 1px solid white; width: 80%;">
                <ul id="myMenu">
                    <li> <a href="Index_Log.php"> <i class="fa fa-home" style="font-size: 20px;"> </i> Home </a> </li>
                    <li> <a href='Edit_Gerir_Common.php'> <i class='fas fa-user-cog' style='font-size: 20px;'> </i> Account </a> </li>
                    <li> <a href='Edit_Gerir_Common.php'> <i class='fas fa-key' style='font-size: 20px;'> </i> Key Codes </a> </li>
                    <li> <a href="Logout.php"> <i class="fas fa-sign-out-alt" style="font-size: 20px;"> </i> Logout </a> </li>
                </ul>
            </div>

            <div class="right">
                <h1 class="tit"> <b> Edit Profile </b> </h1>
                <form class="form-group" action="Edit_Common.php" method="POST">
                    <div style="float: right; margin-right: 5%; text-align: center;"> 
                        <img src="<?php echo $_SESSION['login']['image']; ?>" class="account_img"> <br>
                    </div>
                    <div class="form-group" style="margin-top: 0%; margin-left: 5%;">
                        <label class="label" for="dados"> Username </label> <br>
                        <input type="text" name="edit_username" class="dados" placeholder="Username" value="<?php echo $_SESSION['login']['username'] ?>">
                    </div>
                    <div class="form-group" style="margin-top: 0%; margin-left: 5%;">
                        <label class="label" for="dados"> Password </label> <br>
                        <input type="password" name="edit_password" class="dados" placeholder="Password">
                    </div>
                    <div class="form-group" style="margin-top: 0%; margin-left: 5%;">
                        <label class="label" for="dados"> E-mail </label> <br>
                        <input type="email" name="edit_email" class="dados" placeholder="E-mail" value="<?php echo $_SESSION['login']['email'] ?>">
                    </div>
                    <div class="form-group" style="margin-top: 0%; margin-left: 5%;">
                        <label class="label" for="dados"> Photo </label> <br>
                        <input class="edit_account_img" type="file" id="myfile" name="myfile" multiple>
                    </div>
                    <div class="form-group" style="margin-top: 0.5%;">
                        <input type="submit" name="btn_update" class="submit" value="Update">
                        <input type="reset" class="reset" value="Reset">
                    </div>
                    <div class="form-group 
                    <?php 
                        if(empty($_SESSION['status']))
                            echo("hide");
                    ?>
                    ">
                    <span class="erro"> <?php if(!empty($_SESSION['status']))
                                        echo $_SESSION['status'];
                                        unset($_SESSION['status']);
                                ?>
                    </span>
                    </div>
                    
                    
                </form>
            </div>
        </div>

        <!-- JavaScript - JavaScript - JavaScript - JavaScript - JavaScript - JavaScript -->

    </body>
</html>