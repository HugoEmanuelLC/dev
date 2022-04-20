<?php

namespace App\dbconfig;

use PDO;
use PDOException;

class ConnMySql{

    public function connMySql(){
        
        $host = "localhost";
        $dbname = "hc85";
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