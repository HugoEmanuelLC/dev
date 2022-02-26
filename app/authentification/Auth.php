<?php

namespace App\authentification;

use App\models\connectionDB\connMySql;

class Auth extends connMySql
{
    private string $user;
    private string $password;

    public function __construct(string $usr, string $psw)
    {
        $this->user = $usr;
        $this->password = $psw;
    }

    
}