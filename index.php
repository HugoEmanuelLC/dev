<?php

use Router\Routes;

require_once realpath("vendor/autoload.php");

$route = new Routes($_GET['url']);

$route->get('/', 'App\controllers\siteweb\SiteWebController@home');
$route->get('/contact', 'App\controllers\siteweb\SiteWebController@contact');
$route->get('/menus/:id', 'App\controllers\siteweb\SiteWebController@menus');

$route->run();
