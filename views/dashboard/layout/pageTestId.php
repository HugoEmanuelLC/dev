<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'ID test'; 
$back = "../";

require('../views/dashboard/fragments/navbar.php');

// if (!$_COOKIE["client"]) {
    
//     header('Location:http://localhost/projets/model-04-2022/dashboard/');

// }
if (isset($_COOKIE["notclient"])) {

    if (isset($_COOKIE["client"])) {

        setcookie("client", "", time()-3600,"/","",0);
        unset($_COOKIE["client"]);
    }

    header('Location:http://localhost/projets/model-04-2022/dashboard/');
}
else {
}

?>

<h1><?=$descriptitle?> : <?php print_r($params[0]) ?></h1>