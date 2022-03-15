<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, SASS, PHP, <?= $keywords ?>">
    <meta name="description" content="Modele de base pour un developpement plus rapide, <?= $description ?>">
    <meta name="author" content="Hugo Clavinas">
<!---->
    <link rel="icon" type="image/png" href="<?= $back = (isset($back)) ? $back : false ?>public/images/iconsLogos/logo_hc.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link rel="stylesheet" href="<?= $back = (isset($back)) ? $back : false ?>public/styles/siteWeb/css/style.css">
    <link rel="stylesheet" href="<?= $back = (isset($back)) ? $back : false ?>public/styles/panel/css/style.css">

    <title>Modele pre-prepare | <?= $descriptitle ?></title>
</head>

<body>
    <div class="page">
        
        <?=$navbar = (isset($navbar)) ? $navbar : false ?>

        <?= $content = (isset($content)) ? $content : "lien interrompue" ?>

    </div>

</body>
</html>