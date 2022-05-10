<?php 

session_start();

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Dashboard Home'; 
//$page_dashboard = "page_dash";  //control dediv parent main.php
$backUrlStyle = "../";

require('../views/dashboard/fragments/navbar.php');
require('../views/dashboard/services/verifAuth.php');

?>



<div class="contenue_page dash_shadow">
    <h1><?=$descriptitle?> </h1>
</div>