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
        $this->usr = $_POST['usr'];
        $this->psw = $_POST['psw'];
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

        // if ($request) {

        //     $user = "";
        //     $pass = "";
        //     foreach ($request as $list) {
        //         $user .= $list[0];
        //         $pass .= $list[1];
        //     }

        //     if ($user == $this->usr && $this->psw == $pass) {

        //         header('Location:http://localhost/MES-PROJETS/MCV-PHP/model_04_2022/dashboard/');
                
        //     }else{echo "incorrect";}

        // }else{echo "probleme de connection";}
    } 

    public function resultatVerif()
    {
        $result = $this->veriffication($this->usr, $this->psw);

        if (empty($result)) {

            header('Location:http://localhost/MES-PROJETS/MCV-PHP/model_04_2022/dashboard/test/85');

        }else{

            header('Location:http://localhost/MES-PROJETS/MCV-PHP/model_04_2022/dashboard/');
        }
    }

}

