<?php

namespace App\models\connectionDB;

use PDO;
use PDOException;

class connMySql{

    function connMySql(){
        
        $host = "localhost";
        $dbname = "waw_momo";
        $login = 'root';
        $pswr = '';

        try {

            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
            
            return $bdd;
                
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        
    }
}