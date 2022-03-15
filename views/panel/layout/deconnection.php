

<?php require('../views/siteWeb/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'vous etes deconnecter'; ?>

<?php ob_start(); ?>

<div class="panel">
    <h1><?= $descriptitle ?> </h1>

    <h1>Merci pour votre visite</h1>
</div>

<?php $content = ob_get_clean(); ?>