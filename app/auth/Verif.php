<?php

namespace App\auth;

use App\controllers\Controller;
use App\dbconfig\ConnMySql;

class Verif extends Controller
{

    public $usr;
    public $psw;

    public function __construct()
    {
        // if (isset($_POST['usr']) AND isset($_POST['psw'])) {
            
        //     $this->usr = $_POST['usr'];
        //     $this->psw = $_POST['psw'];

        // }

        // $this->usr = ;
        // $this->psw = $_POST['psw'];
    }

    public function veriffication($username,$password)
    {
        $conn = new ConnMySql;
        $pdo = $conn->connMySql();
        $req = "SELECT * FROM `auth` WHERE `username`=? AND `password`=?";
        $resultReq = $pdo->prepare($req);
        $resultReq->execute(array($username,$password));
		$reponse=$resultReq->fetchAll();

        return $reponse;
    } 

    // public function authentification()
    // {
        
    // }

}

