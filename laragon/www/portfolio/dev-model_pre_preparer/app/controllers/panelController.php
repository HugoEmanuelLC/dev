<?php

namespace App\controllers;

use App\authentification\Auth;
use App\models\connectionDB\ConnMySql;

class PanelController extends ConnMySql 
{
    private $usr;
    private $psw;
    public $reponseIdentification;
    public $msg;
    public $sess;
    public $Controller;

    // public $urlHomePanel;

    public function __construct()
    {

        $this->Controller = new Controller();

        if (session_status() === PHP_SESSION_NONE) {

            session_start();
        }

        if (isset($_POST["usr"]) &&
            isset($_POST["psw"]) &&
            !empty($_POST["usr"]) &&
            !empty($_POST["psw"]) ) {

            $this->usr = $_POST["usr"];
            $this->psw = $_POST["psw"];
        } else {

            $this->usr = null;
            $this->psw = null;
        }
    }


    public function authentification()
    {
        // session_start();

        $auth = new Auth();
        $reponse = $auth->connection($this->usr, $this->psw);

        if (!empty($this->usr) &&
            !empty($this->psw)) {
                
            if (!empty($reponse)) {

                setcookie("client", "true", time()+3600,"/","",1);
                $this->reponseIdentification = setcookie("client", "true", time()+3600,"/","",1);
                setcookie("user", "$this->usr", time()+3600);

                $_SESSION["clientAuth"] = true;

                // return header('Location: /my-panel');
                $return = $this->homePanel();
            } else {

                $_SESSION['msg'] = "formulaire incorrect";

                // return header('Location: /my-panel-log');
                $return = $this->panelLog();
            }
        } else {

            $_SESSION['msg'] = "formulaire incomplet";

            // return header('Location: /my-panel-log');
            $return = $this->panelLog();
        }

        return $return;
    }


    public function deconnect()
    {
        session_unset();
        session_destroy();

        setcookie("client", "", time()-3600,"/","",0);
        unset($_COOKIE["client"]);

        $_SESSION["clientAuth"] = false;

        $this->usr = null;
        $this->psw = null;

        $this->reponseIdentification = 0;

        // $header = header('Location: /my-panel');

        $this->panelLog();

        // require('../views/panel/layout/deconnection.php');
        // require('../views/main.php');
    }



    public function panelLog()
    {
        $this->reponseIdentification = 0;
        var_dump("variable".$this->reponseIdentification);

        // require('../views/panel/layout/logAccueil.php');
        // require('../views/main.php');

        return $this->Controller->view('panel.layout.logAccueil');
    }


    public function homePanel()
    {

        if (isset($_SESSION["clientAuth"]) &&
            $_SESSION["clientAuth"] === true &&
            isset($this->reponseIdentification) &&
            $this->reponseIdentification == true
            // &&
            // isset($_COOKIE["client"]) && 
            // $_COOKIE["client"] === "true"
            ){

                var_dump($this->usr . $this->psw);
                var_dump($_SESSION["clientAuth"]);
                var_dump($_COOKIE["client"]);
                var_dump("variable".$this->reponseIdentification);

                // require('../views/panel/layout/homePanel.php');
                // require('../views/main.php');
                return $this->Controller->view('panel.layout.homePanel');

        } else {

            $_SESSION['msg'] = "il c'est produit un probleme";
            
            $this->panelLog();
        }
    }


    public function test()
    {

        // if (isset($_COOKIE["client"])) {

        //     $sess = $this->sess;

        //     var_dump("voila");
        //     var_dump($_COOKIE["client"]);
        //     var_dump($_SESSION["clientAuth"]);
        // } else {

        //     var_dump("pas de cookie client ");
        // }
    }
}
