<?php 
session_start();
// $session = session_start();

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Dashboard ID test'; 
$back = "../";
$backUrlStyle = "../../";
// $page_dashboard = "page_dash" ." testCss";  //control dediv parent main.php

require('../views/dashboard/fragments/navbar.php');
require('../views/dashboard/services/verifAuth.php');

?>


<div class="contenue_page dash_shadow">
    <h1><?=$descriptitle?> : <?php print_r($params[0]) ?> <?= var_dump($_SESSION["AUTH"]);?></h1>


</div>