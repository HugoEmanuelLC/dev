<?php 

$keywords = 'mots cles, mots cles'; 
$description = 'description de la page'; 
$descriptitle = 'Panel de configuration'; 

require('../views/siteWeb/fragments/navbar.php'); 

?>



<div class="panel">
    <h1><?= $descriptitle ?></h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <form method="post" action="my-panel">

        <label for="">Username</label>
        <input type="text" name="usr">

        <label for="">Password</label>
        <input type="password" name="psw">

        <input type="submit" value="Connection">

    </form>
</div>



