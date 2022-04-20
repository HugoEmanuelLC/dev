<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Accueil | Dashboard';

// require('../views/dashboard/fragments/navbar.php');

?>

<?php //ob_start(); ?>

<h1><?=$descriptitle?></h1>

<form action="verif.php" method="post">
    <p>user</p>
    <input type="text" name="usr">

    <p>password</p>
    <input type="password" name="psw">
    <br>
    <br>
    <input type="submit" value="connection">
</form>

<?php //$content = ob_get_clean(); ?>