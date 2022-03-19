<h1>HTTP/1.0 404 Not Found</h1>

<?php require('./views/siteWeb/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'ID test'; ?>

<?php ob_start(); ?>

<h1>Mon ID est : <?= $id ?></h1>

<?php $content = ob_get_clean(); ?>

<?php require('./views/main.php'); ?>