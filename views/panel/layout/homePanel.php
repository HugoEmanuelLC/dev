

<?php require('../views/panel/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'bienvenue au home panel'; ?>

<?php ob_start(); ?>

<div class="panel">
    <h1><?= $descriptitle ."  Mrs  " . $_COOKIE["user"] ?> </h1>

    <?php

    if (isset($result)) {
        echo $result;
    } 
    else {
        // header('index.php');
    }


    ?>
</div>

<?php $content = ob_get_clean(); ?>