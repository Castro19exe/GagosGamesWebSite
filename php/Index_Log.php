<?php 
    session_start();
    include 'Config.php';
    include "Verification.php";

    $select = "SELECT * FROM `users`";
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
        Home | Gagos Games
    </title>
    <style>
        * {
            box-sizing: border-box;
        }

        .section1 {
            background-image: url("");
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: auto;
        }

        #timer {
            position: absolute;
            top: 25%;
            left: 50%;
            width: 20%;
            margin-top: 0%;
            padding: 0px;
            text-align: center;
            font-size: 225%;
            font-family: Century Gothic;
            font-weight: bold;
            color: white;
            animation-duration: 0.7s;
            animation-iteration-count: 1;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-shadow: 0px 0px 11px rgba(0, 0, 0, 6);
            transition: border 0.3s, color 0.3s;
            transition: border 0.5s;
        }

        .PAP_image {
            filter: blur(5px);
            -webkit-filter: blur(5px);
            background-image: url("../img/background6.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
        }

        .PAP_text {
            position: absolute;
            cursor: pointer;
            top: 55%;
            left: 50%;
            min-width: 30%;
            padding: 0px;
            text-align: center;
            font-size: 400%;
            font-family: Century Gothic;
            font-weight: bold;
            color: #C63A3A;
            /*
            background-image: url("img/background5.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 130% auto;
            border: 1px solid #C63A3A;
            border-radius: 21em 10em 4em / 10em 3em;
            */
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-shadow: 0px 0px 11px rgba(0, 0, 0, 1);
            transition: border 0.3s, color 0.3s, background-size 1s;
        }

        .PAP_text:hover {
            color: white;
            /*
            background-size: 115% auto;
            border-bottom: 1px solid #C63A3A;
            */
        }

        .modal {
            z-index: 1;
            display: none;
            position: fixed;
            overflow: auto; /* Enable scroll if needed */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-top: 10px; /* Location of the box */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.6); /* Black w/ opacity */
        }

        .modal-content {
            position: relative;
            width: 70%;
            margin: auto;
            padding: 0;
            background-color: #fefefe;
            border: 0px;
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s;
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px; 
                opacity: 0;
            } 
            to {
                top: 0px; 
                opacity: 1;
            }
        }

        @keyframes animatetop {
            from {
                top: -300px; 
                opacity: 0;
            }
            to {
                top: 0px; 
                opacity: 1;
            }
        }

        .close {
            color: white;
            float: right;
            font-size: 30px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #C63A3A;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            text-align: center;
            font-size: 120%;
            font-family: Century Gothic;
            color: #C63A3A;
            background-image: url("../img/background7.1.png");
            background-size: cover;
            background-repeat: no-repeat;
            text-shadow: 0px 0px 11px rgba(0, 0, 0, 1);
        }

        .modal-body {
            padding: 20px 20%;
            color: #C63A3A;
            text-shadow: 0px 0px 2px rgba(0, 0, 0, 1);
        }

        .modal-footer {
            width: 100%;
            overflow: hidden;
            padding: 2px 16px;
            text-align: center;
            list-style-type: none;
            font-size: 130%;
            font-family: Century Gothic;
            color: #929292;
            background-image: url("../img/background7.1.png");
            background-size: cover;
            background-repeat: no-repeat;
            border-top: 1px solid #3E3E3E;
        }

        .btn_download {
            position: absolute;
            cursor: pointer;
            outline: none;
            top: 86%;
            left: 50%;
            width: 20%;
            margin-top: 3%;
            padding: 25px 35px;
            font-size: 110%;
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

        #about_us_team {
            min-width: 100%;
        }

        .about_title_team {
            display: block;
            margin-top: 7%;
            margin-bottom: 4%;
            padding: 0px 0px;
            text-align: center;
            font-size: 500%;
            font-family: Century Gothic;
            color: #000000;
            text-shadow: 0px 0px #000000;
        }

        .card {
            display: inline-block;
            min-width: 10%;
            text-align: center;
            font-family: arial;
            -webkit-box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 1px 21px -4px rgba(0, 0, 0, 0.75);
        }

        .name {
            color: black;
            font-size: 30px;
            font-family: Century Gothic;
        }

        .position {
            color: grey;
            font-size: 20px;
            font-family: Century Gothic;
        }

        .social_networks {
            text-decoration: none;
            font-size: 22px;
            color: #C63A3A;
            transition: opacity 0.3s;
        }

        .social_networks:hover {
            opacity: 0.5;
        }

        #about_us_story {
            min-width: 100%;
        }

        .about_title_story {
            display: block;
            margin-top: 9%;
            margin-bottom: 5%;
            padding: 0px 0px;
            text-align: center;
            font-size: 500%;
            font-family: Century Gothic;
            color: #000000;
            text-shadow: 0px 0px #000000;
        }

        .about_text {
            min-width: 100%;
            overflow: auto;
            resize: both;
            margin-top: -3%;
            padding: 20px 20%;
            font-size: 120%;
            font-family: Century Gothic;
        }

        .underline {
            text-decoration: none;
            font-size: 100%;
            font-family: Century Gothic;
            font-weight: bold;
            color: #000000;
            border-bottom: 1px solid #000000;
            border-radius: 191em 100em 40em / 5em 3em 3em;
            transition: color 0.2s, border 0.2s;
        }

        .underline:hover {
            color: #C63A3A;
            border-bottom: 1px solid #C63A3A;
            border-radius: 191em 100em 40em / 5em 3em 3em;
        }

        #video {
            width: 70%;
            height: 700px;
            margin-top: 1%;
            -webkit-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 15px 2px rgba(0, 0, 0, 0.75);
            transition: border 0.3s;
        }

        @media screen and (max-width: 600px) {
            #timer {
                font-size: 230%;
            }

            .bg-text {
                font-size: 170%;
                background-image: none;
                border: 0px solid #C63A3A;
            }

            .bg-text:hover {
                background-size: 100% auto;
                border: 0px solid #C63A3A;
            }

            .btn_download {
                margin-top: 15%;
                padding: 20px 50px;
            }

            .position {
                display: none;
            }
            
            .name {
                display: none;
            }
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="TOP"> <i class="fas fa-arrow-up"> </i> </button>
    <!-- Menu -->
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

    <div class="PAP_image"> </div>
        <p id="timer"> </p>
        <a href="Login.php">
            <button class="btn_download"> CHECK THE PRE-ORDER </button>
        </a>
        <div id="overlay_btn" class="PAP_text">
            <h1> Project PAP </h1>
        </div>
        <!-- Modal -->
        <div id="Modal" class="modal">
        <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close"> &times; </span>
                    <h1> Project PAP </h1>
                </div>
                <div class="modal-body">
                    <p>
                        Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text
                        Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text
                        Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text Some Text.
                    </p>
                    <div class='loader'> </div> 
                </div>
                <div class="modal-footer">
                    <p> © 2020 CopyRight Gagos Games </p>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div id="about_us_team" style="text-align: center; margin-top: 5%;">
            <h1 class="about_title_team"> Our Team </h1>
            <div class="card" style="margin-right: 2%; margin-top: 1%;">
                <img src="../img/castro.png" alt="" style="width:100%; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
                <h1 class="name"> João de Castro </h1>
                <p class="position"> Programming Team </p>
                <p style="font-family: Edwardian Script ITC; font-size: 170%;"> Gagos Games ®</p>
                <div style="margin: 25px 0;">
                    <a class="social_networks" href="https://www.youtube.com/playlist?list=PL4e8NpXnH6Ok4tM4WpZ_T8DqNkx8sFIVQ"> <i class="fab fa-youtube"> </i> </a>
                    <a class="social_networks" href="https://www.instagram.com/castroo.9/?hl=pt"> <i class="fab fa-instagram"> </i> </a>
                    <a class="social_networks" href="https://www.linkedin.com/in/joão-de-castro-0629b41b2/"> <i class="fab fa-linkedin-in"> </i> </a>
                </div>
            </div>

            <div class="card" style="margin-right: 2%; margin-top: 1%;">
                <img src="../img/rafa.jpg" alt="" style="width:100%; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
                <h1 class="name"> Rafael Santos </h1>
                <p class="position"> Programming Team Leader </p>
                <p style="font-family: Edwardian Script ITC; font-size: 170%;"> Gagos Games ®</p>
                <div style="margin: 25px 0;">
                    <a class="social_networks" href="https://www.instagram.com/rafalaranja/?hl=pt"> <i class="fab fa-instagram"> </i> </a>
                    <a class="social_networks" href="https://www.linkedin.com/in/rafael-santos-8b39921b2/"> <i class="fab fa-linkedin-in"> </i> </a>
                </div>
            </div>

            <div class="card" style="margin-right: 2%; margin-top: 1%;">
                <img src="../img/prof.png" alt="" style="width:100%; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
                <h1 class="name"> Vera Rio Maior </h1>
                <p class="position"> CTO & Founder </p>
                <p style="font-family: Edwardian Script ITC; font-size: 170%;"> Gagos Games ®</p>
                <div style="margin: 25px 0;">
                    <a class="social_networks" href="https://www.instagram.com/vera_maior/?hl=pt"> <i class="fab fa-instagram"> </i> </a> 
                </div>
            </div>

            <div class="card" style="margin-right: 2%; margin-top: 1%;">
                <img src="../img/souza.jpg" alt="" style="width:100%; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
                <h1 class="name"> João Souza </h1>
                <p class="position"> Design Team Leader </p>
                <p style="font-family: Edwardian Script ITC; font-size: 170%;"> Gagos Games ®</p>
                <div style="margin: 25px 0;">
                    <a class="social_networks" href="https://www.instagram.com/joaosouza304/?hl=pt"> <i class="fab fa-instagram"> </i> </a>
                </div>
            </div>

            <div class="card" style="margin-top: 1%;">
                <img src="../img/tiago.png" alt="" style="width:100%; -webkit-filter: grayscale(100%); filter: grayscale(100%);">
                <h1 class="name"> Tiago Pereira </h1>
                <p class="position"> Design Team </p>
                <p style="font-family: Edwardian Script ITC; font-size: 170%;"> Gagos Games ®</p>
                <div style="margin: 25px 0;">
                    <a class="social_networks" href="https://www.instagram.com/tiagopereira_ofcc/?hl=pt"> <i class="fab fa-instagram"> </i> </a>
                </div>
            </div>
        </div>

        <div id="about_us_story">
            <h1 class="about_title_story"> We Started... </h1>
            <div class="about_text">
                <p style="width: 100%;">
                    In 2019 at the <a href="http://www.esgc.pt/portal/" class="underline">escola secundária de Gago Coutinho</a>, in Portugal, to develop, publish and 
                    support the games most focused on players in the world. At the end of 2018, four members got together and had 
                    the idea to start this project to create a game development group. Currently, we already have one more member 
                    and several supporters of the organization. Regarding the games already published, we can tell you that we 
                    already have 3 games already published, such as <a href="" class="underline">Virus Defender</a>, <a href="" class="underline">Fruit Heroes - Candy Land</a>.
                    Our group's initial engine was <a href="https://www.yoyogames.com/get" class="underline">GameMaker Studio 2</a>, but in the last few months we have been working on 
                    several projects in relation to <a href="https://unity.com" class="underline">Unity <i class="fab fa-unity" style="font-size: 20px;"> </i></a>. We were also featured in several game jems, the largest being <a href="http://www.gamesforgood.pt/2020/" class="underline">Games For Good</a>,
                    the last at <a href="https://www.iade.europeia.pt" class="underline">IADE</a>.
                </p>
                    In addition to the games, we also created our own website, that is, this website you are currently using and the 
                    programming languages ​​used were: <a href="https://pt.wikipedia.org/wiki/HTML5" class="underline">HTML5 <i class="fab fa-html5" style="font-size: 20px;"> </i></a>, <a href="https://pt.wikipedia.org/wiki/CSS3" class="underline">CSS3 <i class="fab fa-css3-alt" style="font-size: 20px;"> </i></a>, 
                    <a href="https://pt.wikipedia.org/wiki/JavaScript" class="underline">JavaScript <i class="fab fa-js" style="font-size: 20px;"> </i></a> and <a href="https://pt.wikipedia.org/wiki/PHP" class="underline">PHP <i class="fab fa-php" style="font-size: 20px;"> </i></a>. So that we can share our work with the gaming community.
                </p>
                <p style="width: 100%;">
                    This small group was founded and led by Vera Rio Maior, Gagos is based in Alverca do Ribatejo, Lisbon.
                </p>
            </div>
        </div>

        <center>
            <h1 class="about_title_team"> Some Support & Motivaion </h1>
            <iframe id="video" src="https://www.youtube.com/embed/MuD7eLyfPMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
        </center>

        <div class="footer"> 
            <p> © 2020 CopyRight Gagos Games </p>
        </div>
    </section>

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

    
    <!-- Button go to the top -->

    <script>
        var mybutton = document.getElementById("myBtn");

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- Timer -->
    
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Feb 20, 2021 16:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
        }, 1000);
    </script>

    <!-- Overlay -->

    <script>
    // Get the modal
        var modal = document.getElementById("Modal");

        // Get the button that opens the modal
        var btn = document.getElementById("overlay_btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>