<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
</head>
<body>

    <?php
    
    if (!isset($_SESSION["AUTH"])) {
        
        header('Location:http://localhost/MES-PROJETS/MCV-PHP/test-conn-login?msg=je suis passé par l IF...');  

        echo "je suis dans l' IF";
    }
    elseif (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "false") {
        
        header('Location:http://localhost/MES-PROJETS/MCV-PHP/test-conn-login?msg=je suis passé par l ELSE IF...');
    }
    else{
        echo "je suis dans l' ELSE";
    }
    
    ?>
    <h1>mais voila <?= var_dump($_SESSION["AUTH"]);?></h1>
    <h1>mais voila <?= var_dump($_SESSION["AUTH02"]);?></h1>
</body>
</html>