<?php 
session_start();
session_destroy(); 
?>

<?php require('../views/siteWeb/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'Accueil'; ?>

<?php ob_start(); ?>

<h1><?=$descriptitle?></h1>

<div class="page_bot">
        <div class="bloc_bot">
            <div class="botimg" ></div>
            <div class="botshadow">
                <p>Modele pre-prepare !</p>
                <p>Maintenance en continue ;-)</p>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
