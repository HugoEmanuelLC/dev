<?php

namespace App\controllers\dashboard;

use App\controllers\Controller;

class CntrlDash extends Controller
{

    public function accueil()
    {
        return $this->view('dashboard.layout.accueil');
    }

    public function testId(int $params)
    {
        return $this->view('dashboard.layout.pageTestId', [$params]);
    }

}