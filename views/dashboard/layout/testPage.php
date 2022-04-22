<?php 

session_start();

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Test page | Dashboard'; 
$page_dashboard = "page_dash";  //control dediv parent main.php
$backUrlStyle = "../";

require('../views/dashboard/fragments/navbar.php');
require('../views/dashboard/services/verifAuth.php');

?>

<h1><?=$descriptitle?> </h1>