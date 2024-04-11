<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/register.css">
    <link rel="icon" href="../public/img/icon2.png">
    <title> Register | Gagos Games </title>
</head>
<body>
    <section class="structure">
        <div class="div-form">
            <h1 class="title-login"> REGISTER </h1>
            <form>
                <input type="text" name="username" class="form-input" placeholder="Username" autofocus>
                <input type="email" name="email" class="form-input" placeholder="Email">
                <input type="password" name="password" class="form-input" placeholder="Password">
                <input type="password" name="con-password" class="form-input" placeholder="Repeat Password">
                <p> Have an account! <a href="../index.php"> LOGIN HERE </a> </p> 
                <button type="submit" name="submit" class="btn-login"> Register </button>
            </form>
        </div>
    </section>
</body>
</html>
