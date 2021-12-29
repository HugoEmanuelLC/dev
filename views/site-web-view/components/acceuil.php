<?php $descriptitle = 'Acceuil, mon profil v3'; ?>

<?php ob_start(); ?>

<h1>home</h1>

<?php $content = ob_get_clean(); ?>

<?php require('./views/main.php'); ?>