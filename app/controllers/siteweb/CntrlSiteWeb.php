<?php

namespace App\controllers\siteweb;

use App\controllers\Controller;

class CntrlSiteWeb extends Controller
{

    public function accueil()
    {
        return $this->view('siteweb.layout.accueil');
    }

    public function testId(int $params)
    {
        return $this->view('siteweb.layout.pageTestId', [$params]);
    }

}
