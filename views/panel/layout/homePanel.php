<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'bienvenue au home panel';

require('../views/panel/fragments/navbar.php'); 

?>

<div class="panel">
    <h1><?= $descriptitle ."  Mrs  " . $_COOKIE["user"] ?> </h1>

    <?php

    if (isset($result)) {
        echo $result;
    } 
    else {
        // header('index.php');
    }


    ?>
</div>

