<?php

use App\auth\Verif;

$verif = new Verif();

$result = $verif->veriffication($_POST['usr'], $_POST['psw']);

if (!empty($result)) {

    // $session = session_start();

    setcookie("client", "true", time()+3600);

    // $_SESSION["client"] = true;
    
    header('Location:http://localhost/projets/model-04-2022/dashboard/test/85');

}else{

    header('Location:http://localhost/projets/model-04-2022/dashboard?msg=invalide');
}