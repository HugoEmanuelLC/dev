<?php require('./views/siteWeb/fragments/navbar.php'); ?>

<?php $descriptitle = 'Acceuil'; ?>

<?php ob_start(); ?>

<h1>Accueil</h1>

<div class="page_bot">
        <div class="bloc_bot">
            <div class="botimg" ></div>
            <div class="botshadow">
                <p>Modele pre-prepare !</p>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
