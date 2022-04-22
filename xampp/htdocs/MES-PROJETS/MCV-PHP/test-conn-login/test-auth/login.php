<?php

require('configDB.php');
$affiche="";
$auth = false;
$result = "";

$bdd = connMySql();
$req = "SELECT * FROM `auth`";
$result = $bdd->query($req);

foreach ($result as $user) {
    $affiche .= $user[1] .'-' .$user[2]; 

    if (isset($_POST["usr"]) && isset($_POST["psw"])) {

        if ($user[1] === $_POST["usr"] && $user[2] === $_POST["psw"]) {
            $auth=true;
            require('page.php');
            http_response_code(200);
        }
        else {
            $result = "formulaire incorrect";
            require('index.php');
            http_response_code(400);
        }

    }
    else {
        $result = "veuillez remplir le formulaire suivant";
        require('index.php');
        http_response_code(404);
    }
}

?>

