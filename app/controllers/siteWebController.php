<?php 

namespace App\controllers;

class siteWebController{

    public function accueil(){

        require('./views/siteWeb/layout/accueil.php');
        require('./views/main.php');
        
    }

    

    public function test(){

        require('./views/siteWeb/layout/test.php');
        require('./views/main.php');
        
    }

    

    public function idTest(int $id){

        $back = "../";
        require('./views/siteWeb/layout/idTest.php');
        require('./views/main.php');
        
    }

}