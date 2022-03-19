<?php
// session_start();
use App\authentification\Auth;

$auth = new Auth();
$identification = $auth->panelAuth($_POST['usr'],$_POST['psw']);

if (isset($_POST['usr']) && isset($_POST['psw'])) {
    header("Location:../../verification",true);
}
else {
    var_dump($identification);
}

?>