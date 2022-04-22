<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>ERROR : <?= $msg = (isset($_GET['msg']) ) ? $_GET['msg'] : false ?></h1>

    <?php if (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "auth" ) {
        $_SESSION["AUTH"] = "false";
    } ?>

    <form action="verif.php" method="post">
        <p>user</p>
        <input type="text" name="usr">

        <p>password</p>
        <input type="password" name="psw">
        <br>
        <br>
        <input type="submit" value="connection">
    </form>
</body>
</html>