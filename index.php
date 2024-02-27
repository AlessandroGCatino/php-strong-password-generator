<?php

session_start();

$passwordLenght = $_GET["pwdlen"] ?? 0;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Gen</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <div id="back">

        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center">Genera una password sicura</h2>
        <div class="text-center p-5">
            <?php if($passwordLenght != 0) : ?>
                <h4> <?=  $_SESSION["password"]  ?> </h4>
            <?php endif ?>
            <form action="result.php" method="get">
                <label for="pwdlen">Lunghezza password: </label>
                <input type="number" name="pwdlen" id="pwdlen" min="1">
                <button type="submit" class="btn btn-primary">Genera</button>
            </form>
        </div>

    </div>



<style lang="scss">
    #back{
        background-color: #001632;
        height: 100vh;
        color: lightcyan;
        padding: 20px 15%;
    }
    div{
        color: black;
        background-color: white;
    }
</style>
    
</body>
</html>