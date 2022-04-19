<?php

use Router\Routes;

require_once realpath("../vendor/autoload.php");

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

//à modifier au niveau de __DIR__ à la place de 'SCRIPT_NAME' pour les images :
define('IMAGES', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$route = new Routes($_GET['url']);

//SITE WEB
$route->get('/', 'App\controllers\siteweb\CntrlSiteWeb@accueil');
$route->get('/test/:params', 'App\controllers\siteweb\CntrlSiteWeb@testId');

$route->run();