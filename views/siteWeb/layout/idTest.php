<?php require('../views/siteWeb/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'ID test'; ?>

<?php ob_start(); ?>

<h1><?=$descriptitle?> : <?= $id ?></h1>

<?php $content = ob_get_clean(); ?>