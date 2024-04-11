<?php 
    session_start();
    include 'Config.php';

    $select = "SELECT * FROM `commets` INNER JOIN `forums` on comments.id_forum = forums.id";
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
        Teste | Gagos Games
    </title>
    <style>
        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 40%;
            background: #f1f1f1;
            -ms-transform: translate(70%, -50%);
            transform: translate(70%, 0%);
        }

        form.example button {
            float: left;
            width: 5%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
            -ms-transform: translate(70%, -50%);
            transform: translate(561%, 0%);
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="TOP"> <i class="fas fa-arrow-up"> </i> </button>

    <form class="example" action="SMS.php" method="POST">
        <input type="text" name="mensage" placeholder="Search..">
        <button type="submit"> <i class="fa fa-search"> </i> </button>
    </form>

    <?php foreach($result as $dados) { ?>
        <div style="padding: 30px 150px;">
            <a href="Chat.php" style="text-decoration: none; color: #C63A3A;">
                <div class="forums">
                    <p style="padding: 0px 30px; float: right;"> Created By: <?php echo $dados['mensage'] ?> </p>
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