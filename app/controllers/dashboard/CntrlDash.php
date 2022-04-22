<?php

namespace App\controllers\dashboard;

use App\controllers\Controller;

class CntrlDash extends Controller
{

    public function accueil()
    {
        return $this->view('dashboard.layout.accueil');
    }

    public function login()
    {
        return $this->view('dashboard.services.auth');
    }

    public function loading()
    {
        return $this->view('dashboard.services.loading');
    }

    public function testId(int $params)
    {
        return $this->view('dashboard.layout.pageTestId', [$params]);
    }

    public function testPage()
    {
        return $this->view('dashboard.layout.testPage');
    }

}