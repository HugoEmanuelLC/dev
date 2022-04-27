<?php
session_start();

use App\auth\Verif;

$verif = new Verif();

$result = $verif->veriffication($_POST['usr'], $_POST['psw']);

if (!empty($result)) {

    $_SESSION["AUTH"] = "auth";
    
    header('Location:http://localhost/projets/model-04-2022/dashboard/loading');

}else{

    header('Location:http://localhost/projets/model-04-2022/dashboard/?msg=invalide');
}