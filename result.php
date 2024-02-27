<?php

    session_start();
    $passwordLenght = $_GET["pwdlen"] ?? 0;

    include './functions.php';
    genPW($passwordLenght);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>

</head>
<body>
    <h1>
        <?= $_SESSION["password"] ?>
    </h1>
</body>
</html>