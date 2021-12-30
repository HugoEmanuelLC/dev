<?php $descriptitle = 'Erreur'; ?>

<?php ob_start(); ?>

<h1>Erreur 500</h1>

<?php $content = ob_get_clean(); ?>

<?php require('./main.php'); ?>