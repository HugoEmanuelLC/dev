<?php $descriptitle = 'Menu ' . $id; ?>

<?php ob_start(); ?>

<h1> mon id est <?= $id ?></h1>

<?php $content = ob_get_clean(); ?>

<?php require('./views/main.php'); ?>