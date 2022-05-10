<?php 
// $background_image = (isset($_SESSION["background_image"])) ? $_SESSION["background_image"] : false; 

$ICON = IMAGES . 'images' . DIRECTORY_SEPARATOR . 'Loading_icon.gif' ;
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
    <link rel="icon" type="image/png" href="<?= $ICON; ?>" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link rel="stylesheet" href="<?= SCRIPTS . 'styles/dashboard/css' . DIRECTORY_SEPARATOR . 'style.css' ?>">

    <title>Modele 04 2022 | <?= $descriptitle ?></title>
</head>

<body>
<div class="page_dash" style="background-image: url('<?= $backUrlStyle; ?>public/images/dashboard/background/dynamic-wang-irn9H9-Kfq4-unsplash.jpg');">

    <?=$navbar = (isset($navbar)) ? $navbar : null ?>

    <?= $content = (isset($content)) ? $content : "lien interrompue" ?>

</div>

</body>
</html>