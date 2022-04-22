<?php 

// $session = session_start();

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'ID test | Dashboard'; 
$back = "../";

require('../views/dashboard/fragments/navbar.php');
// require('../views/dashboard/services/verifAuth.php');

?>

<h1><?=$descriptitle?> : <?php print_r($params[0]) ?> <?= var_dump($_SESSION["auth"]);?></h1>