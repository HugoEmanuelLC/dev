<?php 

namespace App\controllers;

class SiteWebController extends Controller
{

    public function accueil()
    {

        // require('../views/siteWeb/layout/accueil.php');
        // require('../views/main.php');

        return $this->view('siteWeb.layout.accueil');
        
    }

    

    public function test()
    {

        // require('../views/siteWeb/layout/test.php');
        // require('../views/main.php');
        return $this->view('siteWeb.layout.test');
        
    }

    

    public function idTest(int $id)
    {

        // $back = "../";
        // require('../views/siteWeb/layout/idTest.php');
        // require('../views/main.php');
        return $this->view('siteWeb.layout.idTest');
        
    }

}