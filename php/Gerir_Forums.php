<?php 
    session_start();
    include 'Config.php';
    include "Verification_Admin.php";

    $select = "SELECT * FROM `forums` INNER JOIN `users` on forums.id_user = users.id ORDER BY forums.created_at DESC";
    $result = mysqli_query($conn, $select);

    $delete = "DELETE * FROM `forums`";
    $result2 = mysqli_query($conn, $delete);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/gagos_games2.png" sizes="18x18">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'> </script>
	<title>
		Manage Forums | Gagos Games
	</title>
    <style>
        body {
            background-image: url("../img/darkw.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .row {
            display: flex;
        }

        .left {
            flex: 30%;
            height: 1000px;
            padding: 40px 0px;
            margin-right: 10px;
            background-color: rgba(0, 0, 0, 0.9);
            border: 2px solid #AE42A1;
            border-radius: 0px;
            box-shadow: 0px 0px 40px #AE42A1 inset;
        }

        .right {
            flex: 100%;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.9);
            border: 2px solid #4259AE;
            border-radius: 0px;
            box-shadow: 0px 0px 40px #4259AE inset;
        }

        #myMenu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myMenu li a {
            display: block;
            width: 80%;
            padding: 15px 40px;
            text-decoration: none;
            font-size: 150%;
            font-family: Century Gothic;
            font-weight: bold;
            color: #AE42A1;
            transition: color 0.3s;
        }

        #myMenu li a:hover {
            color: #D69FCF;
        }

        .tit {
            color: #4259AE;
            font-size: 400%;
            font-family: Century Gothic;
            margin-top: 3%;
            margin-bottom: 5%;
        }

        .alert_error {
            width: 91.5%;
            padding: 20px;
            margin: auto;
            color: white;
            font-size: 120%;
            font-family: Century Gothic;
            border-radius: 15px;
            background-color: #C63A3A;
            -webkit-animation-name: erro;
            -webkit-animation-duration: 0.5s;
            animation-name: erro;
            animation-duration: 0.5s;
        }

        .alert_success {
            width: 91.5%;
            padding: 20px;
            margin: auto;
            color: white;
            font-size: 120%;
            font-family: Century Gothic;
            border-radius: 15px;
            background-color: #11AB55;
            -webkit-animation-name: erro;
            -webkit-animation-duration: 0.5s;
            animation-name: erro;
            animation-duration: 0.5s;
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

        .sms_apagar {
            display: block;
            font-size: 150%;
            font-family: Century Gothic;
            text-align: center;
        }

        #customers {
            font-family: Century Gothic;
            border-collapse: collapse;
            width: 95%;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            color: #467073;
            background-color: #D6D6D6;
            border: 2px solid #4259AE;
            box-shadow: 0px 0px 12px #969696 inset;
        }

        #customers td {
            padding: 12px 13px;
            background-color: #F5F5F5;
            border: 2px solid #4259AE;
        }

        .edit_btn {
            cursor: pointer;
            width: 90%;
            color: #939393;
            background-color: #F5F5F5;
            font-family: Century Gothic; 
            border: none;
            transition: box-shadow 0.3s;
        }

        .edit_btn:hover {
            outline: 0;
            cursor: pointer;
            background-color: #F5F5F5;
        }

        .card {
            display: inline-block;
            min-width: 16.5%;
            text-align: center;
            font-size: 110%;
            font-family: Century Gothic;
            background-color: white;
            -webkit-box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
        }

        #overlay_disable {
            z-index: 2;
            position: fixed;
            display: none;
            width: 30%;
            height: 30%;
            top: 31%;
            left: 46%;
            right: 0;
            bottom: 0;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.9);
            border: 2px solid #646464;
            border-radius: 0px;
            box-shadow: 0px 0px 30px #646464 inset;
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        .disable_btn {
            cursor: pointer;
            width: 30%;
            height: 50px;
            color: #646464;
            background-color: white;
            font-family: Century Gothic; 
            font-size: 150%;
            border: 2px solid #646464;
            box-shadow: 0px 0px 20px #646464 inset;
            transition: width 0.3s, box-shadow 0.3s;
        }

        .disable_btn:hover {
            outline: 0;
            cursor: pointer;
            width: 90%;
            height: 50px;
            background-color: white;
            border: 2px solid #939393;
            box-shadow: 0px 0px 40px #939393 inset;
        }

        #overlay_delete {
            position: fixed;
            display: none;
            z-index: 2;
            width: 30%;
            height: 30%;
            top: 31%;
            left: 46%;
            right: 0;
            bottom: 0;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.9);
            border: 2px solid #AE4242;
            border-radius: 0px;
            box-shadow: 0px 0px 30px #AE4242 inset;
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        .delete_btn {
            display: inline-block;
            cursor: pointer;
            width: 30%;
            height: 50px;
            font-size: 150%;
            font-family: Century Gothic; 
            color: #AE4242;
            background-color: white;
            border: 2px solid #AE4242;
            box-shadow: 0px 0px 20px #AE4242 inset;
            transition: width 0.3s, box-shadow 0.3s;
        }

        .delete_btn:hover {
            cursor: pointer;
            outline: 0;
            width: 90%;
            height: 50px;
            background-color: white;
            border: 2px solid #AE4242;
            box-shadow: 0px 0px 40px #AE4242 inset;
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
            }
            to {
                top: 10;
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
            }
            to {
                top: 10;
            }
        }
    </style>
    </head>
    <body>
        <div class="row">
            <div class="left">
                <h1 style="color: #AE42A1; font-family: Century Gothic; font-size: 300%; text-align: center;"> Tools </h1>
                <hr style="border: 1px solid #AE42A1; width: 80%;">
                <ul id="myMenu">
                    <li> <a href="Index_Log.php"> <i class="fa fa-home" style="font-size: 20px;"> </i> Home </a> </li>
                    <li> <a href="Gerir.php"> <i class='fa fa-users' style='font-size: 20px;'> </i> Manage Accounts </a> </li>
                    <li> <a href="Gerir_Forums.php"> <i class='fas fa-comment-dots' style='font-size: 20px;'> </i> Manage Forums </a> </li>
                    <li> <a href=""> <i class='fas fa-share-square' style='font-size: 20px;'> </i> New Post </a> </li>
                    <li> <a href=""> <i class='fa fa-bar-chart' style='font-size: 20px;'> </i> Graphs </a> </li>
                    <li> <a href=""> <i class="fa fa-gears" style="font-size: 20px;"> </i> Settings </a> </li>
                    <li> <a href="Logout.php"> <i class="fas fa-sign-out-alt" style="font-size: 20px;"> </i> Logout </a> </li>
                </ul>
            </div>

            <div class="right">
                
                <h1 align="center" class="tit"> <b> Manage Forums </b> </h1>

                <div class="form-group <?php if(empty($_SESSION['status'])) echo("hide"); ?> ">
                    <span> <?php if(!empty($_SESSION['status'])) echo $_SESSION['status']; unset($_SESSION['status']); ?> </span>
                </div>

                <table id="customers" align="center" style="margin-top: 1%; margin-bottom: 2.5%;">
                <tr>
                    <th> ID </th>
                    <th> Criador </th>
                    <th> Name </th>
                    <th> Descrição </th>
                    <th> Assunto </th>
                    <th> Status </th>
                    <th> Data </th>
                    <th> D/E </th>
                    <th> Delete </th>
                </tr>
                <tr>
                    <?php foreach($result as $dados) { ?>
                    <td style="text-align: center; font-weight: bold;"> <?php echo $dados['id'] ?> </td>
                    <td> <?php echo $dados['username']?> </td>
                    <td> <?php echo $dados['name'] ?> </td>
                    <td> <?php echo $dados['descricao']?> </td>
                    <td> <?php echo $dados['assunto']?> </td>
                    <td style="text-align: center;"> <?php echo $dados['created_at']?> </td>
                    <td style="text-align: center;"> <?php if($dados['is_disable'] == 1) echo '<font color="#AE4242"> Disable </font>'; else echo '<font color="#42AE83"> Enable </font>';?> </td>
                    
                    <td style="cursor: pointer; text-align: center;">
                        <button onclick="on_disable('<?php echo $dados['id'] ?>')" style="border: 0px; cursor: pointer; background-color: #F5F5F5;">
                            <?php if($dados['is_disable'] == 1) echo '<i class="fas fa-user" style="font-size: 22px; color: #939393;"> </i>'; else echo '<i class="fas fa-user-alt-slash" style="font-size: 20px; color: #939393;"> </i>';?>
                        </button>
                    </td>
                    <td style="cursor: pointer; text-align: center;">
                        <button onclick="on_delete('<?php echo $dados['id'] ?>')" style="border: 0px; cursor: pointer; background-color: #F5F5F5;">
                            <i class="fas fa-trash" style="font-size: 22px; color: #AE4242;"> </i>
                        </button>
                    </td>
                </tr>
                    <?php } ?>
                </table>
                
                <div id="overlay_delete">
                    <p style="margin-top: 10%; color: #AE4242; font-family: Century Gothic; font-size: 150%;"> Do you wanna delete this account? </p>
                    <form action="Delete.php" method="POST">
                        <input type="hidden" name="delete_id" id="overlay_delete_input">
                        <button type="submit" name="delete_btn" class="delete_btn"> Yes </button>
                    </form>
                    <button onclick="off_delete()" class="delete_btn"> Cancel </button>
                </div>

            </div>
        </div>

        <!-- JavaScript - JavaScript - JavaScript - JavaScript - JavaScript - JavaScript -->

        <!-- Overlays -->

        <script>
            function on_disable($id) {
                document.getElementById("overlay_disable").style.display = "block";
                document.getElementById("overlay_delete").style.display = "none";
                document.getElementById("overlay_disable_input").value = $id;
            }

            function off_disable() {
                document.getElementById("overlay_disable").style.display = "none";
            }
        </script>

        <script>
            function on_delete($id) {
                document.getElementById("overlay_delete").style.display = "block";
                document.getElementById("overlay_disable").style.display = "none";
                document.getElementById("overlay_delete_input").value = $id;
            }

            function off_delete() {
                document.getElementById("overlay_delete").style.display = "none";
            }
        </script>

    </body>
</html>