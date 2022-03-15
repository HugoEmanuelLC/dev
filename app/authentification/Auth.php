<?php
namespace App\authentification;

use App\models\connectionDB\ConnMySql;
use Exception;

class Auth extends ConnMySql
{
    public function connection($username,$password)
    {
        $conn = new ConnMySql();
        $dbd = $conn->connMySql();
        $req = "SELECT * FROM `auth` WHERE `username`=? AND `password`=?";
        $resultReq = $dbd->prepare($req);
        $resultReq->execute(array($username,$password));
		$reponse=$resultReq->fetchAll();
        return $reponse;
    }
}