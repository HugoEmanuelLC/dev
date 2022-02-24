<?php require('./views/siteWeb/fragments/navbar.php'); ?>

<?php $descriptitle = 'Test'; ?>

<?php ob_start(); ?>

<h1>Test</h1>

<?php $content = ob_get_clean(); ?>