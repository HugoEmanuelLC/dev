<?php require('../views/siteWeb/fragments/navbar.php'); ?>

<?php $keywords = 'mots cles, mots cles'; ?>
<?php $description = 'description de la page'; ?>
<?php $descriptitle = 'Test'; ?>

<?php ob_start(); ?>

<h1>Test</h1>

<?php $content = ob_get_clean(); ?>