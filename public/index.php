<?php

use Router\Routes;

require_once realpath("../vendor/autoload.php");

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

//test à modifier au niveau de __DIR__ à la place de 'SCRIPT_NAME' pour les images :
define('IMAGES', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
// define('IMAGES', dirname(__DIR__) . 'public/images/');

$route = new Routes($_GET['url']);

//SITE WEB
$route->get('/', 'App\controllers\siteweb\CntrlSiteWeb@accueil');
$route->get('/accueil', 'App\controllers\siteweb\CntrlSiteWeb@accueil');
$route->get('/test/:params', 'App\controllers\siteweb\CntrlSiteWeb@testId');

//DASHBOARD
$route->get('/dashboard', 'App\controllers\dashboard\Cntrldash@login');
$route->get('/dashboard/logout', 'App\controllers\dashboard\Cntrldash@login');
$route->post('/dashboard/auth', 'App\controllers\dashboard\Cntrldash@auth');
$route->get('/dashboard/loading', 'App\controllers\dashboard\Cntrldash@loading');
$route->get('/dashboard/home', 'App\controllers\dashboard\Cntrldash@home');
$route->get('/dashboard/test/:params', 'App\controllers\dashboard\Cntrldash@testId');

$route->run();