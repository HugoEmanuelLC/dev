<?php session_start(); ?>

<?php 

$bdd = 'mysql:host=localhost;dbname=projet_essayer04;charset=utf8';
$login = 'root';
$pswr = '';

try
{
	// On se connecte à MySQL
	$pdo = new PDO($bdd, $login, $pswr);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


try {
    
    $usr = $_POST["usr"];
    $psw = $_POST["psw"];

    $select = "SELECT `nameUser`, `pswd` FROM `users`";
    $request = $pdo->query($select);

    if ($request) {

        $user = "";
        $pass = "";
        foreach ($request as $list) {
            $user .= $list[0];
            $pass .= $list[1];
        }

        if ($user == $usr && $psw == $pass) {

            $_SESSION["AUTH"] = "auth";
            $_SESSION["AUTH02"] = "auth02";

            header('Location:pageLogue.php');
            
        }else{
            header('Location:index.php?msg=incorrect...');
        }

    }else{echo "probleme de connection";}

}catch(Exception $e){ die('Erreur : '.$e->getMessage());}