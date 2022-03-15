<?php $sess = session_start(); ?>

<?php require('../views/panel/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'panel test'; ?>

<?php ob_start(); ?>

<h1><?=$descriptitle?> </h1>

<?php $content = ob_get_clean(); ?>