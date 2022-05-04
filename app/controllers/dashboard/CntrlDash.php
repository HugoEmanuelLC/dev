<?php

namespace App\controllers\dashboard;

use App\controllers\Controller;

class CntrlDash extends Controller
{

    public function login()
    {
        return $this->viewDash('dashboard.layout.login');
    }

    public function auth()
    {
        return $this->viewDash('dashboard.services.auth');
    }

    public function loading()
    {
        return $this->viewDash('dashboard.services.loading');
    }

    public function testId(int $params)
    {
        return $this->viewDash('dashboard.layout.pageTestId', [$params]);
    }

    public function testPage()
    {
        return $this->viewDash('dashboard.layout.testPage');
    }

}