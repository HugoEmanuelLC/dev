<?php require('./views/siteWeb/fragments/navbar.php'); ?>

<?php $descriptitle = 'ID test'; ?>

<?php ob_start(); ?>

<h1>Mon ID est : <?= $id ?></h1>

<?php $content = ob_get_clean(); ?>