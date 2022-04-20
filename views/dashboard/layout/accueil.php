<?php
$msg = "";
$http = "https://localhost/projets/model-04-2022/dashboard/login";

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Accueil | Dashboard';

// require('../views/dashboard/fragments/navbar.php');

if (isset($_COOKIE["client"])) {
    setcookie("client", "", time()-3600,"/","",0);
    unset($_COOKIE["client"]);
    setcookie("notclient", "true", time()+3600,"/","",1);
}else {
}
?>

<?php //ob_start(); ?>

<h1><?=$descriptitle?></h1>

<h3><?= $msg = (isset($_GET["msg"])) ? $_GET["msg"] : false ?></h3>

<form action="<?= $http; ?>" method="post">
    <p>user</p>
    <input type="text" name="usr">

    <p>password</p>
    <input type="password" name="psw">
    <br>
    <br>
    <input type="submit" value="connection">
</form>

<?php //$content = ob_get_clean(); ?>