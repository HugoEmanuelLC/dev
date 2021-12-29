<?php 

namespace App\controllers\siteweb;

class SiteWebController{

    public function home()
    {
        require('./views/site-web-view/components/acceuil.php');
    }

    public function menus(int $id)
    {
        require('./views/site-web-view/components/menus.php');
    }

    public function contact()
    {
        require('./views/site-web-view/components/contact.php');
    }

    public function error()
    {
        require('./views/site-web-view/components/error.php');
    }

}
