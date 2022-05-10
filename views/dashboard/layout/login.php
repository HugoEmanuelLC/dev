<?php
session_start();
$msg = "";
$http = "https://localhost/projets/model-04-2022/dashboard/auth";

//HEAD
$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Accueil | Dashboard';

$backUrlStyle = "../";
// $page_dashboard = "page_dash" ." testCss";  //control de div parent main.php
$_SESSION["background_image"] =  'black-stars.jpg' ;    //fond d'ecran de div parent main.php
// $backUrlStyle = (isset($_GET['msg'])) ? '../' : false;
// require('../views/dashboard/fragments/navbar.php');
require_once('../views/dashboard/services/deconnAuth.php');


?>

<?php //ob_start(); ?>

<div class="contenue_page">
    <h1><?=$descriptitle?> </h1>

    <a class="a_retour dash_shadow" href="http://localhost/projets/model-04-2022/"> <i class="fa-solid fa-chevron-left"></i> &nbsp; Retour </a>

    <h3><?= $msg = (isset($_GET["msg"])) ? $_GET["msg"] : false; ?></h3>
    <h3><?= $msgDeconnecter = (isset($msgDeconnecter)) ? $msgDeconnecter : false; ?></h3>

    <form class="dash_shadow" action="<?= $http; ?>" method="post">
        <div class="">
            <label for="usr">User</label>
            <input type="text" name="usr">
        </div>

        <div class="">
            <label for="psw">Password</label>
            <input type="password" name="psw">
        </div>
        <br>
        <br>
        <div class="">
            <button type="submit">Connection</button>
        </div>
    </form>
</div>

<!--<form action="<?= $http; ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>-->

<?php //$content = ob_get_clean(); ?>